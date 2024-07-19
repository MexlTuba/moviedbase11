<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/actors', [ActorController::class, 'index']);
    Route::get('/actors/{id}', [ActorController::class, 'show']);

    Route::get('/directors', [DirectorController::class, 'index']);
    Route::get('/directors/{id}', [DirectorController::class, 'show']);

    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{id}', [MovieController::class, 'show']);
    Route::get('/movies.genres', [MovieController::class, 'movieGenres']);
    Route::get('/movies.ratings', [MovieController::class, 'movieRatingsRater']);

    Route::get('/genres', [GenreController::class, 'index']);
});
