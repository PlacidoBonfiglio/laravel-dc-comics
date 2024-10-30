@extends("layouts.app")

@section("page-title", "Laravel Comics Show")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-5">Il Film che hai selezionato</h2>

        <div class="text-center">
            <p class="mt-3">
                <span class="fw-bold">Titolo: </span>{{$movie->title}}
            </p>
            <p>
                <span class="fw-bold">Titolo originale: </span>{{$movie->original_title}}
            </p>
            <p>
                <span class="fw-bold">Nazionalità: </span>{{$movie->nationality}}
            </p>
            <p>
                <span class="fw-bold">Data: </span>{{$movie->date}}
            </p>
            <p>
                <span class="fw-bold">Media dei voti: </span>{{$movie->vote}}
            </p>
        </div>

    </section>
@endsection
