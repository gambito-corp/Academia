<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('roles', RolController::class)->names('roles');
Route::resource('usuarios', UserController::class)->names('users');
