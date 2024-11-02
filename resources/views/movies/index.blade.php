@extends("layouts.app")

@section("page-title", "Laravel Comics Index")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-5">Lista dei Film</h2>

        <div>
            <a href="{{ route("movies.create") }}" class="btn btn-primary mb-4 fw-bold">Aggiungi Film +</a>
        </div>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Titolo originale</th>
                  <th scope="col">Nazionalità</th>
                  <th scope="col">Data</th>
                  <th scope="col">Voto</th>
                  <th scope="col">Bottoni</th>
                </tr>
              </thead>
              <tbody>

                @foreach ( $movies as $movie )
                    <tr>
                        <th scope="row">{{ $movie->id}}</th>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->nationality }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>
                        <td>
                            <a href="{{ route("movies.show", $movie->id) }}" class="btn btn-primary">Mostra</a>
                            <a href="{{ route("movies.edit", $movie->id) }}" class="btn btn-success">Modifica</a>

                            <form action="{{ route("movies.delete", $movie->id) }}" method="POST" class="d-inline env-destroyer" custom-data-name="{{ $movie->title }}">
                                @method("DELETE")
                                @csrf
                                <button href="/delete" type="submit" class="btn btn-danger">Rimuovi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

              </tbody>
        </table>

    </section>
@endsection

@section("additional-scripts")
    @vite("resources/js/movies/delete-confirmation.js")
@endsection
