@extends('layouts.app')

@section('content')
<nav id="nav">
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
                <th scope="col">Wybierz rolę:</th>
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
                <td>
                    <form id="rolesform-{{$user->id}}" method="POST" action="{{ route('updateUserRole', $user->id) }}">
                        @csrf
                        <select name="role" id="role-{{$user->id}}">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="worker" {{ $user->role == 'worker' ? 'selected' : '' }}>Worker</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </form>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm delete" onclick="document.getElementById('rolesform-{{$user->id}}').submit();">Zatwierdź</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>
@endsection
