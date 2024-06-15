@extends('layouts.app')

@section('content')

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<nav id="nav">
    <ul>
        <li><a href="{{ url(Auth::user()->role) }}">Home</a></li>
    </ul>
</nav>

<div id="main">
    <section id="four" class="main special">

        @isset($books)
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ISBN</th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Rok wydania</th>
                        <th scope="col">Akcja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->ISBN }}</td>
                        <td>{{ $book->tytul }}</td>
                        <td>{{ $book->imie_autor }} {{ $book->nazwisko_autor }}</td>
                        <td>{{ $book->data_wydania }}</td>
                        <td>
                            @if($book->status === 'available')
                            <form action="{{ route('rentals.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <button type="submit" class="btn btn-primary btn-sm">Wypożycz</button>
                            </form>
                            @else
                            <button class="btn btn-secondary btn-sm" disabled>Książka aktualnie niedostępna</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endisset
    </section>
</div>

@endsection
