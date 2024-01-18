<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::all();

        return view('majors.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Major::create([
            'name' => $request->name,
        ]);

        session()->flash('status', 'Data created successfully');
        return to_route('majors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        return view('majors.show', compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(major $major)
    {
        return view('majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        $major->update([
            'name' => $request->name,
        ]);

        session()->flash('status', 'Data updated successfully');
        return to_route('majors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete();

        session()->flash('status', 'Data deleted successfully');
        return to_route('majors.index');
    }
}
