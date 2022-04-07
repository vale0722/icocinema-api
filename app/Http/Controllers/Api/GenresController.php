<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\StoreGenreRequest;
use App\Http\Resources\Api\GenresResource;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GenresController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return GenresResource::collection(Genre::paginate());
    }

    public function store(StoreGenreRequest $request): JsonResponse
    {
        $genre = new Genre();
        $genre->name = $request->get('name');
        $genre->save();

        return GenresResource::make($genre)->response()->setStatusCode(201);
    }

    public function update(Request $request, Genre $genre): JsonResponse
    {
        $genre->name = $request->name;
        $genre->save();

        return GenresResource::make($genre)->response()->setStatusCode(201);
    }

    public function destroy(Genre $genre): JsonResponse
    {
        $genre->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente el genero que has elegido']);
    }
}
