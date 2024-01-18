<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ExtracurricularController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'roleAdmin'], function () {
        Route::resource('articles', ArticleController::class);
        Route::resource('extracurriculars', ExtracurricularController::class);
        Route::resource('majors', MajorController::class);
    });

    Route::group(['middleware' => 'roleTeacher'], function () {
        Route::resource('students', StudentController::class);
    });
});
