<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\BookingsController;
use App\Http\Controllers\Api\ChairsController;
use App\Http\Controllers\Api\GenresController;
use App\Http\Controllers\Api\GuestMoviesController;
use App\Http\Controllers\Api\MoviesController;
use App\Http\Controllers\Api\RoomsController;
use App\Http\Controllers\Api\ShowsController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('guest/movies', [GuestMoviesController::class, 'index'])->name('guest.movies');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/me', [AuthController::class, 'me'])->name('auth.me');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.api');

    Route::apiResource('movie', MoviesController::class);
    Route::apiResource('genre', GenresController::class);
    Route::apiResource('room', RoomsController::class);
    Route::apiResource('show', ShowsController::class);
    Route::apiResource('chair', ChairsController::class);
    Route::apiResource('user', UsersController::class);
    Route::apiResource('booking', BookingsController::class);
});

Route::post('/login', [AuthController::class, 'login'])->name('login.api');
Route::post('/register', [AuthController::class, 'register'])->name('register.api');
