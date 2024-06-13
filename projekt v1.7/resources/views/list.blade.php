@extends('layouts.app')

@section('content')
<nav id="nav">
  <ul>
  <li><a href="{{ url($user->role) }}">Home</a></li>
  </ul>
</nav>
<div id="main">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->surname}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->date}}</td>
        <td><a href="{{route('users.edit', $user->id)}}">
        <button class="btn btn-danger btn-sm">Edytuj</button>
        </a></td>
        <td><button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">USUŃ</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$users->links()}}
</div>
@endsection

@section('javascript')
<script>
  $(function(){
    console.log('jQuery is ready');
    $('.delete').click(function(){
      var userId = $(this).data("id");
      $.ajax({
        method: "DELETE",
        url: "http://127.0.0.1:8000/users/" + userId,
        data: { id: userId }
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
