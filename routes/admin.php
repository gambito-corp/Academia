<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware('can:Ver Dashboard')->name('home');

Route::patch('roles/baja', [RolController::class, 'delete'])->name('roles.borrar');
Route::resource('roles', RolController::class)->names('roles');
Route::resource('usuarios', UserController::class)->names('users');
