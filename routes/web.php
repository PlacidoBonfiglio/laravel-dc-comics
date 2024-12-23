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
Route::post('/movies', [MovieController::class, "store"])->name("movies.store");
Route::get('/movies/create', [MovieController::class, "create"])->name("movies.create");
Route::get('/movies/{id}', [MovieController::class, "show"])->name("movies.show");
Route::put('/movies/{id}', [MovieController::class, "update"])->name("movies.update");
Route::delete('/movies/{id}', [MovieController::class, "destroy"])->name("movies.delete");
Route::get('/movies/{id}/edit', [MovieController::class, "edit"])->name("movies.edit");
