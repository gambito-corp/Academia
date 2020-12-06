<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        return view('front.Courses.index');
    }
    public function show(Course $course)
    {
        $this->authorize('published', $course);
        $similares = Course::where('category_id', $course->category_id)
            ->where('id', '!=', $course->id)
            ->where('status', Course::PUBLICADO)
            ->latest('id')
            ->take(5)
            ->get();
        return view('front.Courses.show', compact('course', 'similares'));
    }

    public function enrolled(Course $course)
    {
        $course->Estudiante()->attach(Auth::id());
        return redirect()->route('courses.show', $course);
    }
}
