<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies');

Route::get('/manage', [App\Http\Controllers\ManageController::class, 'index'])->name('manage');

Route::get('/users/login', [App\Http\Controllers\UsersController::class, 'login'])->name('login');

Route::get('/users/register', [App\Http\Controllers\UsersController::class, 'create'])->name('register');

Route::post('/users/login', [App\Http\Controllers\UsersController::class, 'authenticate'])->name('authenticate');

Route::post('/users/register', [App\Http\Controllers\UsersController::class, 'store'])->name('register.store');

Route::post('/logout', [App\Http\Controllers\UsersController::class, 'logout'])->name('logout');

Route::get('/movies/create', [App\Http\Controllers\MoviesController::class, 'create'])->name('movies.create');

Route::post('/movies', [App\Http\Controllers\MoviesController::class, 'store'])->name('movies.store');

Route::get('/movies/{id}/edit', [App\Http\Controllers\MoviesController::class, 'edit'])->name('movies.edit');

Route::get('/movies/show/{id}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');

Route::post('/movies/update/{id}', [App\Http\Controllers\MoviesController::class, 'update'])->name('movies.update');

Route::delete('/movies/destroy/{id}', [App\Http\Controllers\MoviesController::class, 'destroy'])->name('movies.destroy');

Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');

Route::get('/categories/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');

Route::post('/categories', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');

Route::post('/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');


