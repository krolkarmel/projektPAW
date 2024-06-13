@extends('layouts.app')
@section('content')
<div id="main">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Miasto</th>
      <th scope="col">Ulica</th>
      <th scope="col">Numer</th>
      <th scope="col">Piętro</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($libraries as $library)
                <tr>
                    <th scope="row">{{ $library->id }}</th>
                    <td>{{ $library->miasto }}</td>
                    <td>{{ $library->ulica }}</td>
                    <td>{{ $library->numer }}</td>
                    <td>{{ $library->pietro }}</td>
                </tr>
            @endforeach
  </tbody>
</table>
</div>
@endsection