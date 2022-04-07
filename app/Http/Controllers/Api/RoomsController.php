<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\RoomsResource;
use App\Models\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoomsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return RoomsResource::collection(Room::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $room = new Room();
        $room->number = $request['number'];
        $room->save();

        return RoomsResource::make($room)->response()->setStatusCode(201);
    }


    public function update(Request $request, Room $room)
    {
        $room->number = $request['number'];
        $room->save();

        return RoomsResource::make($room);
    }

    public function destroy(Room $room): JsonResponse
    {
        $room->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente la sala que has elegido']);
    }
}
