<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        $extracurriculars = Extracurricular::all();

        return view('students.create', compact('majors', 'extracurriculars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'status' => $request->status,
            'address' => $request->address,
            'major_id' => $request->major_id,
            'extracurricular_id' => $request->extracurricular_id,
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $student->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        session()->flash('status', 'Data created successfully');
        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $majors = Major::all();
        $extracurriculars = Extracurricular::all();

        return view('students.edit', compact('student', 'majors', 'extracurriculars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'status' => $request->status,
            'address' => $request->address,
            'major_id' => $request->major_id,
            'extracurricular_id' => $request->extracurricular_id,
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $student->clearMediaCollection('photo');
            $student->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        session()->flash('status', 'Data updated successfully');
        return to_route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        session()->flash('status', 'Data deleted successfully');
        return to_route('students.index');
    }
}
