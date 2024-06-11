@extends('layouts.app')
@section('content')
<div id="main">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
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
    </tr>
    @endforeach
  </tbody>
</table>
{{$users->links()}}
</div>
@endsection