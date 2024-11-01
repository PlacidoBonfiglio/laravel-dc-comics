<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, "home"])->name("home");
Route::get('/movies', [MovieController::class, "index"])->name("movies");
Route::get('/movies/create', [MovieController::class, "create"])->name("movies.create");
Route::get('/movies/{id}', [MovieController::class, "show"])->name("movies.show");
Route::post('/movies', [MovieController::class, "store"])->name("movies.store");

