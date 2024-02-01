<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MajorController;
use App\Http\Controllers\API\ExtracurricularController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/majors', [MajorController::class, 'index']);
Route::post('/majors', [MajorController::class, 'store']);
Route::get('/majors/{major}', [MajorController::class, 'show']);
Route::put('/majors/{major}', [MajorController::class, 'update']);
Route::delete('/majors/{major}', [MajorController::class, 'destroy']);

Route::get('/extracurriculars', [ExtracurricularController::class, 'index']);
Route::post('/extracurriculars', [ExtracurricularController::class, 'store']);
Route::get('/extracurriculars/{extracurricular}', [ExtracurricularController::class, 'show']);
Route::put('/extracurriculars/{extracurricular}', [ExtracurricularController::class, 'update']);
Route::delete('/extracurriculars/{extracurricular}', [ExtracurricularController::class, 'destroy']);

Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::put('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);
