<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        $users = User::with('media')->paginate(15);

        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request): UserResource | JsonResponse
    {
        try {
            $user = User::create($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $user->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new UserResource($user->load('media'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): UserResource
    {
        return new UserResource($user->load('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user): UserResource | JsonResponse
    {
        try {
            $user->update($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $user->clearMediaCollection('photo');
                $user->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new UserResource($user->load('media'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
        ]);
    }
}
