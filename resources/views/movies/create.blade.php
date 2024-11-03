@extends("layouts.app")

@section("page-title", "Laravel Comics Create")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-3">Aggiungi i dati di un nuovo Film</h2>

        <form class="row row-cols-1 justify-content-center" action="{{ route("movies.store") }}" method="post">
            @csrf

            <div class="col-6 m-3">
                <label for="film-name">Inserisci Titolo</label>
                <input class="form-control" type="text" value="{{ old('title') }}" id="film-name" name="title">
                @error("title")
                    <div class="alert alert-warning mt-2">Il titolo deve avere almeno 4 caratteri</div>
                @enderror
            </div>

            <div class="col-6 m-3">
                <label for="film-original-name">Inserisci Titolo Originale</label>
                <input class="form-control" type="text" value="{{ old('original_title') }}" id="film-original-name" name="original_title">
                @error("original_title")
                    <div class="alert alert-warning mt-2">Il titolo originale deve avere almeno 4 caratteri</div>
                @enderror
            </div>

            <div class="col-6 m-3">
                <label for="film-nationality">Inserisci la nazionalità</label>
                <input class="form-control" type="text" value="{{ old('nationality') }}" id="film-nationality" name="nationality">
                @error("nationality")
                    <div class="alert alert-warning mt-2">La nazionalità deve avere almeno 4 caratteri</div>
                @enderror
            </div>

            <div class="col-6 m-3 mb-4">
                <label for="film-date">Inserisci la data</label>
                <input class="form-control" type="text" value="{{ old('date') }}" id="film-date" name="date">
                @error("date")
                    <div class="alert alert-warning mt-2">Inserisci una data valida</div>
                @enderror
            </div>

            <div class="col-6 m-3 mb-4">
                <label for="film-vote">Inserisci il voto</label>
                <input class="form-control" type="text" value="{{ old('vote') }}" id="film-vote" name="vote">
                @error("vote")
                    <div class="alert alert-warning mt-2">Il voto deve essere compreso tra 1 e 10</div>
                @enderror
            </div>

            <div class="text-center">
                <button class="btn btn-primary me-3" type="submit">Aggiungi Nuovo Film</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>

    </section>
@endsection
