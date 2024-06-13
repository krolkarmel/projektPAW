@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Wypożycz książkę</h2>
    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="book_id">Wybierz książkę:</label>
            <select id="book_id" name="book_id" class="form-control">
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->tytul }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Wypożycz</button>
    </form>
</div>
@endsection
