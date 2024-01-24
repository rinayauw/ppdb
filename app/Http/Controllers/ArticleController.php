<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string',
        ]);

        $article = Article::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $article->addMediaFromRequest('photo')->toMediaCollection('photo');
        }


        session()->flash('status', 'Data created successfully');
        return to_route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string',
        ]);

        $article->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $article->clearMediaCollection('photo');
            $article->addMediaFromRequest('photo')->toMediaCollection('photo');
        }

        session()->flash('status', 'Data updated successfully');
        return to_route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        session()->flash('status', 'Data deleted successfully');
        return to_route('articles.index');
    }
}
