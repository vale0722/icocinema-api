<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\StoreMovieRequest;
use App\Http\Resources\Api\MoviesResource;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use function response;

class GuestMoviesController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return MoviesResource::collection(Movie::paginate());
    }
}
