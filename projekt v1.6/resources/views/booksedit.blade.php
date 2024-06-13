@extends('layouts.app')

@section('content')
<div id="main">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2>Edycja książek</h2><br>

                <div class="card-body">
                    <form method="POST" action="{{route('books.update', $book->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="tytul" class="col-md-4 col-form-label text-md-end">{{ __('Tytuł:') }}</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{  old('tytul', $book->tytul)  }}" required autocomplete="tytul" autofocus>

                                @error('tytul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-3">
                            <label for="imie_autor" class="col-md-4 col-form-label text-md-end">{{ __('Imię autora:') }}</label>

                            <div class="col-md-6">
                                <input id="imie_autor" type="text" class="form-control @error('imie_autor') is-invalid @enderror" name="imie_autor" value="{{ old('imie_autor', $book->imie_autor)  }}" required autocomplete="imie_autor" autofocus>

                                @error('imie_autor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-3">
                            <label for="nazwisko_autor" class="col-md-4 col-form-label text-md-end">{{ __('Nazwisko autora') }}</label>

                            <div class="col-md-6">
                                <input id="nazwisko_autor" type="text" class="form-control @error('nazwisko_autor') is-invalid @enderror" name="nazwisko_autor" value="{{ old('nazwisko_autor', $book->nazwisko_autor)  }}" required autocomplete="nazwisko_autor">

                                @error('nazwisko_autor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-3">
                            <label for="ISBN" class="col-md-4 col-form-label text-md-end">{{ __('Numer ISBN') }}</label>

                            <div class="col-md-6">
                                <input id="ISBN" type="number" class="form-control @error('ISBN') is-invalid @enderror" name="ISBN" value="{{ old('ISBN', $book->ISBN)  }}" required autocomplete="ISBN">

                                @error('ISBN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-3">
                            <label for="data_wydania" class="col-md-4 col-form-label text-md-end">{{ __('Data wydania') }}</label>

                            <div class="col-md-6">
                                <input id="data_wydania" type="date" class="form-control @error('data_wydania') is-invalid @enderror" name="data_wydania" value="{{ old('data_wydania', $book->data_wydania)  }}" required autocomplete="data_wydania">

                                @error('data_wydania')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>



                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edytuj książke') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
