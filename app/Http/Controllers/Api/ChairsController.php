<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ChairsResource;
use App\Models\Chair;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ChairsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return ChairsResource::collection(Chair::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $chair = new Chair();
        $chair->room_id = $request['room_id'];
        $chair->save();

        return ChairsResource::make($chair)->response()->setStatusCode(201);
    }

    public function update(Request $request, Chair $chair)
    {
        $chair->room_id = $request['room_id'];
        $chair->save();

        return ChairsResource::make($chair);
    }

    public function destroy(Chair $chair): JsonResponse
    {
        $chair->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente la silla que has elegido']);
    }
}
