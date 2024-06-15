@extends('layouts.app')

@section('content')
<nav id="nav">
  <ul>
    <e><a href="/{{Auth::user()->role}}">Home</a></li>
  </ul>
</nav>
<div id="main">
        <header class="major">
            <h2>Wyniki wyszukiwania książek</h2>
        </header>
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
                            <form action="{{ route('rentals.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{ $book->id }}">
                                <button type="submit" class="btn btn-primary btn-sm">Wypożycz</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endisset

        </div>
@endsection
