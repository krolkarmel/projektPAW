@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edytuj status wypożyczenia</h2>
    @if($rentals->isEmpty())
        <p>Brak wypożyczeń do zarządzania.</p>
    @else
        <ul class="list-group">
            @foreach($rentals as $rental)
                <li class="list-group-item">
                    <strong>{{ $rental->book->tytul }}</strong> - Obecny status: {{ $rental->status }}
                    <form action="{{ route('rentals.updateStatus', $rental) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <select name="status" class="form-control" style="display:inline-block; width:auto;">
                            <option value="in progress" {{ $rental->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="borrowed" {{
