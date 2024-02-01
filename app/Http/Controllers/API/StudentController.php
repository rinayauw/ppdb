<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        $students = Student::with('media')->paginate(15);

        return StudentResource::collection($students);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentStoreRequest $request): StudentResource | JsonResponse
    {
        try {
            $student = Student::create($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $student->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }


        return new StudentResource($student->load('media'));
    }



    /**
     * Display the specified resource.
     */
    public function show(Student $student): StudentResource
    {
        return new StudentResource($student->load('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request, Student $student): StudentResource | JsonResponse
    {
        try {
            $student->update($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $student->clearMediaCollection('photo');
                $student->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new StudentResource($student->load('media'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): JsonResponse
    {
        $student->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
        ]);
    }
}
