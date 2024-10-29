@extends("layouts.app")

@section("page-title", "Laravel Comics")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-3">Inserisci i dati di un nuovo Film</h2>

        <form class="row row-cols-1 justify-content-center" action="">
            <div class="col-6 m-3">
                <input class="form-control" type="text" placeholder="Inserisci Titolo" aria-label="default input example">
            </div>

            <div class="col-6 m-3">
                <input class="form-control" type="text" placeholder="Inserisci Titolo Originale" aria-label="default input example">
            </div>

            <div class="col-6 m-3">
                <input class="form-control" type="text" placeholder="Inserisci Nazionalità" aria-label="default input example">
            </div>

            <div class="col-6 m-3 mb-4">
                <input class="form-control" type="text" placeholder="Inserisci Data" aria-label="default input example">
            </div>

            <div class="text-center">
                <button class="btn btn-primary me-3" type="submit">Invia</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>
    </section>
@endsection
