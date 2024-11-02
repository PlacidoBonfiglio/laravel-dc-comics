<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view("movies.index", compact("movies"));
    }

    public function show(string $id) {
        $movie = Movie::findOrFail($id);
        return view ("movies.show", compact("movie"));
    }

    public function create() {
        return view("movies.create");
    }

    public function store(Request $request) {
        $movieData = $request->all();

        // $movie = new Movie();
        // $movie->title = $movieData["title"];
        // $movie->original_title = $movieData["original_title"];
        // $movie->nationality = $movieData["nationality"];
        // $movie->date = $movieData["date"];
        // $movie->vote = $movieData["vote"];
        // $movie->save();

        $movie = Movie::create($movieData);
        return redirect()->route("movies");
    }

    public function edit(string $id) {
        $movie = Movie::findOrFail($id);
        return view("movies.edit", compact("movie"));
    }

    public function update(Request $request, string $id) {
        $movieData = $request->all();

        $movie = Movie::findOrFail($id);
        $movie->title = $movieData["title"];
        $movie->original_title = $movieData["original_title"];
        $movie->nationality = $movieData["nationality"];
        $movie->date = $movieData["date"];
        $movie->vote = $movieData["vote"];
        $movie->update();

        // $movie->update($movieData); FILLABLE

        return redirect()->route("movies");
    }

    public function destroy(string $id) {
        $movie = Movie::findOrFail($id);

        $movie->delete();
        return redirect()->route("movies");
    }
}
