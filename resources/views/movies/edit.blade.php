@extends("layouts.app")

@section("page-title", "Laravel Comics Create")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-3">Modifica dati del Film selezionato</h2>

        <form class="row row-cols-1 justify-content-center" action="{{ route("movies.update, $movie->id") }}" method="post">
            @method("PUT")
            @csrf

            <div class="col-6 m-3">
                <label for="film-name">Inserisci Titolo</label>
                <input class="form-control" type="text" aria-label="default input example" value="{{ $movie->title }}" id="film-name" name="title">
            </div>

            <div class="col-6 m-3">
                <label for="film-original-name">Inserisci Titolo Originale</label>
                <input class="form-control" type="text" aria-label="default input example" value="{{ $movie->original_title }}" id="film-original-name" name="original_title">
            </div>

            <div class="col-6 m-3">
                <label for="film-nationality">Inserisci la nazionalità</label>
                <input class="form-control" type="text" aria-label="default input example" value="{{ $movie->nationality }}" id="film-nationality" name="nationality">
            </div>

            <div class="col-6 m-3 mb-4">
                <label for="film-date">Inserisci la data</label>
                <input class="form-control" type="text" aria-label="default input example" value="{{ $movie->date }}" id="film-date" name="date">
            </div>

            <div class="col-6 m-3 mb-4">
                <label for="film-vote">Inserisci il voto</label>
                <input class="form-control" type="text" aria-label="default input example" value="{{ $movie->vote }}" id="film-vote" name="vote">
            </div>

            <div class="text-center">
                <button class="btn btn-primary me-3" type="submit">Modifica dati del Film</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>

    </section>
@endsection
