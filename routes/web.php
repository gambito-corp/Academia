<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\InicioController;
use App\Http\Livewire\CourseStatus;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InicioController::class, 'index'])->name('index');


//Cursos front
Route::get('cursos',[CourseController::class, 'index'])->name('courses.index');
Route::get('cursos/{course}',[CourseController::class, 'show'])->name('courses.show');
Route::Post('cursos/{course}/erolled',[CourseController::class, 'enrolled'])->name('courses.enrolled')->middleware('auth');
Route::get('curso/{course}',CourseStatus::class)->name('courses.status')->middleware('auth');

route::view('test','test')->name('ejemplo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
