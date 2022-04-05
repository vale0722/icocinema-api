<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ShowsResource;
use App\Models\Show;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ShowsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return ShowsResource::collection(Show::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $show = new Show();
        $show->show_day = $request['show_day'];
        $show->show_hour = $request['show_hour'];
        $show->room_id = $request['room_id'];
        $show->movie_id = $request['movie_id'];
        $show->save();

        return ShowsResource::make($show)->response()->setStatusCode(201);
    }

    public function update(Request $request, Show $show)
    {
        $show->show_day = $request['show_day'];
        $show->show_hour = $request['show_hour'];
        $show->room_id = $request['room_id'];
        $show->movie_id = $request['movie_id'];
        $show->save();

        return ShowsResource::make($show);
    }

    public function destroy(Show $show): JsonResponse
    {
        $show->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente el show que has elegido']);
    }
}
