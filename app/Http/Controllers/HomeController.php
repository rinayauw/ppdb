<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Extracurricular;
use App\Models\Major;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $majors = Major::count();
        $extracurriculars = Extracurricular::count();
        $students = Student::count();
        $users = User::count();
        $articles = Article::count();

        return view('home', compact('majors', 'extracurriculars', 'students', 'users', 'articles'));
    }
}
