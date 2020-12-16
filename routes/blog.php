<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'listar'])->name('listar');
