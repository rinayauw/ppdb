<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Http\Resources\Article\ArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        $articles = Article::with('media')->paginate(15);

        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request): ArticleResource | JsonResponse
    {
        try {
            $article = Article::create($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $article->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }


        return new ArticleResource($article->load('media'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article->load('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, Article $article): ArticleResource | JsonResponse
    {
        try {
            $article->update($request->except(['photo']));

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $article->clearMediaCollection('photo');
                $article->addMediaFromRequest('photo')->toMediaCollection('photo');
            }
        } catch (\Throwable $th) {
            return response()->json($th);
        }

        return new ArticleResource($article->load('media'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): JsonResponse
    {
        $article->delete();

        return response()->json([
            'message' => 'Data deleted successfully',
        ]);
    }
}
