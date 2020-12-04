<?php

use App\Http\Controllers\InicioController;
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

//Cursos
Route::get('cursos',function (){
    return 'aqui se mostraran los cursos';
})->name('courses.index');

Route::get('cursos/{course}',function ($course){
    return 'aqui se mostraran La informacion del curso: '.$course;
})->name('courses.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
