<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\MoviesResource;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MoviesController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return MoviesResource::collection(Movie::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $movie = new Movie();
        $movie->name = $request['name'];
        $movie->duration = $request['duration'];
        $movie->description = $request['description'];
        $movie->image = $request['image'];
        $movie->min_age = $request['min_age'];
        $movie->release_date = $request['release_date'];
        $movie->genre_id = $request['genre_id'];
        $movie->save();

        return MoviesResource::make($movie)->response()->setStatusCode(201);
    }

    public function update(Request $request, Movie $movie)
    {
        $movie->name = $request['name'];
        $movie->duration = $request['duration'];
        $movie->description = $request['description'];
        $movie->image = $request['image'];
        $movie->min_age = $request['min_age'];
        $movie->release_date = $request['release_date'];
        $movie->genre_id = $request['genre_id'];

        $movie->save();

        return MoviesResource::make($movie);
    }

    public function destroy(Movie $movie): JsonResponse
    {
        $movie->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente la pelicula que has elegido']);
    }
}
