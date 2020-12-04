<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

class InicioController extends Controller
{
    public function index()
    {
        $courses = Course::where('status', Course::PUBLICADO)->latest('id')->get()->take(12);
        return view('front.index', compact('courses'));
    }
}
