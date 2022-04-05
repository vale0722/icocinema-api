<?php

use App\Http\Controllers\Api\BookingsController;
use App\Http\Controllers\Api\ChairsController;
use App\Http\Controllers\Api\GenresController;
use App\Http\Controllers\Api\MoviesController;
use App\Http\Controllers\Api\RoomsController;
use App\Http\Controllers\Api\ShowsController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('movie', MoviesController::class);
Route::apiResource('genre', GenresController::class);
Route::apiResource('room', RoomsController::class);
Route::apiResource('show', ShowsController::class);
Route::apiResource('chair', ChairsController::class);
Route::apiResource('user', UsersController::class);
Route::apiResource('booking', BookingsController::class);

