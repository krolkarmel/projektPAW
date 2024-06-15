@extends('layouts.app')

@section('content')
<nav id="nav">
  <ul>
    <e><a href="/{{Auth::user()->role}}">Home</a></li>
  </ul>
</nav>

<div id="main">
  <h1>Lista książek</h1>
<br>
<a href="/createbooks" class="button">Dodaj</a>

  <br>
<br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ISBN</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Imię autora</th>
        <th scope="col">Nazwisko autora</th>
        <th scope="col">Data wydania</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td>{{$book->ISBN}}</td>
        <td>{{$book->tytul}}</td>
        <td>{{$book->imie_autor}}</td>
        <td>{{$book->nazwisko_autor}}</td>
        <td>{{$book->data_wydania}}</td>
        <td><a href="{{route('books.edit', $book->id)}}">
        <button class="btn btn-danger btn-sm">Edytuj</button>
        </a></td>
        <td><button class="btn btn-danger btn-sm delete" data-id="{{$book->id}}">Usuń</button></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{$books->links()}}
</div>
@endsection

@section('javascript')
<script>
  $(function(){
    console.log('jQuery is ready');
    $('.delete').click(function(){
      var bookId = $(this).data("id");
      $.ajax({
        method: "DELETE",
        url: "http://127.0.0.1:8000/books/" + bookId,
        data: { id: bookId },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })
      .done(function(response) {
        window.location.reload();
      })
      .fail(function(response) {
        alert("ERROR");
      });
    });
  });
</script>
@endsection
