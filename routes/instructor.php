<?php

use App\Http\Livewire\InstructorCourse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'Instructor/course');
Route::get('course', InstructorCourse::class)->name('course.index');

