<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UsersResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UsersController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return UsersResource::collection(User::paginate());
    }

    public function store(Request $request): JsonResponse
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return UsersResource::make($user)->response()->setStatusCode(201);
    }

    public function update(Request $request, User $user)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return UsersResource::make($user);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();
        return response()->json(['status' => '201', 'message' => 'se ha eliminado correctamente el usuario que has elegido']);
    }
}
