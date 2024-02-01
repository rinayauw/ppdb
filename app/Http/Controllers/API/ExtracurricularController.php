<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExtracurricularStoreRequest;
use App\Http\Requests\ExtracurricularUpdateRequest;
use App\Http\Resources\Extracurricular\ExtracurricularResource;
use App\Models\Extracurricular;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        $extracurriculars = Extracurricular::paginate(15);

        return ExtracurricularResource::collection($extracurriculars);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ExtracurricularStoreRequest $request): ExtracurricularResource | JsonResponse
    {
        try {
            $extracurricular = Extracurricular::create($request->all());
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new ExtracurricularResource($extracurricular);
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular): ExtracurricularResource
    {
        return new ExtracurricularResource($extracurricular);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExtracurricularUpdateRequest $request, Extracurricular $extracurricular): ExtracurricularResource | JsonResponse
    {
        try {
            $extracurricular->update($request->all());
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new ExtracurricularResource($extracurricular);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular): JsonResponse
    {
        $extracurricular->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
        ]);
    }
}
