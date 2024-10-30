@extends("layouts.app")

@section("page-title", "Laravel Comics Index")

@section("main-content")
    <section class="container">

        <h2 class="text-center mb-5">Lista dei Film</h2>

        <div>
            <button class="btn btn-primary mb-4 fw-bold">Aggiungi Film +</button>
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
                            <a href="/edit" class="btn btn-success">Modifica</a>

                            <form action="" class="d-inline">
                                <a href="/delete" class="btn btn-danger">Cancella</a>
                            </form>
                        </td>
                    </tr>
                @endforeach

              </tbody>
        </table>

    </section>
@endsection
