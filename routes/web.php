<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies');

Route::get('/manage', [App\Http\Controllers\ManageController::class, 'index'])->name('manage');

Route::get('/users/login', [App\Http\Controllers\UsersController::class, 'login'])->name('login');

Route::get('/users/register', [App\Http\Controllers\UsersController::class, 'create'])->name('register');
