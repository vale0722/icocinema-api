<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\BookingsResource;
use App\Models\Booking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BookingsController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return BookingsResource::collection(Booking::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $booking = new Booking();
        $booking->user_id = $request['user_id'];
        $booking->show_id = $request['show_id'];
        $booking->chair_id = $request['chair_id'];
        $booking->save();

        return BookingsResource::make($booking)->response()->setStatusCode(201);
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->user_id = $request['user_id'];
        $booking->show_id = $request['show_id'];
        $booking->chair_id = $request['chair_id'];
        $booking->save();

        return BookingsResource::make($booking);
    }

    public function destroy(Booking $booking): JsonResponse
    {
        $booking->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente la reserva que has elegido']);
    }
}
