@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Twoje wypożyczenia</h2>
    @if($rentals->isEmpty())
        <p>Nie masz żadnych wypożyczeń.</p>
    @else
        <ul class="list-group">
            @foreach($rentals as $rental)
                <li class="list-group-item">
                    <strong>{{ $rental->book->tytul }}</strong> - Status: {{ $rental->status }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
