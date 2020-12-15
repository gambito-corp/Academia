<?php

use App\Http\Livewire\CoursesIndex;
use App\Http\Controllers\Instructor\CourseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'Instructor/course');
Route::resource('course', CourseController::class);
