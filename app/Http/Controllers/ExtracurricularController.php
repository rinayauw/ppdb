<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtracurricularStoreRequest;
use App\Http\Requests\ExtracurricularUpdateRequest;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::all();

        return view('extracurriculars.index', compact('extracurriculars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('extracurriculars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExtracurricularStoreRequest $request)
    {

        $extracurricular = Extracurricular::create($request->all());

        session()->flash('status', 'Data created successfully');
        return to_route('extracurriculars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular)
    {
        return view('extracurriculars.show', compact('extracurricular'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        return view('extracurriculars.edit', compact('extracurricular'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExtracurricularUpdateRequest $request, Extracurricular $extracurricular)
    {
        $extracurricular->update($request->all());

        session()->flash('status', 'Data updated successfully');
        return to_route('extracurriculars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();

        session()->flash('status', 'Data deleted successfully');
        return to_route('extracurriculars.index');
    }
}
