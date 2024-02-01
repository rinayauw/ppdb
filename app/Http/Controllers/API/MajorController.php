<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\MajorStoreRequest;
use App\Http\Requests\MajorUpdateRequest;
use App\Http\Resources\Major\MajorResource;
use App\Models\Major;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        $majors = Major::paginate(15);

        return MajorResource::collection($majors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MajorStoreRequest $request): MajorResource | JsonResponse
    {
        try {
            $major = Major::create($request->all());
        } catch (\Throwable $th) {
            return response()->json($th);
        }


        return new MajorResource($major);
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major): MajorResource
    {
        return new MajorResource($major);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MajorUpdateRequest $request, Major $major): MajorResource | JsonResponse
    {
        try {
            $major->update($request->all());
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new MajorResource($major);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major): JsonResponse
    {
        $major->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
        ]);
    }
}
