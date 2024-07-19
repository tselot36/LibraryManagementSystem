<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('home');
});

// Resource routes for authors
Route::resource('authors', AuthorController::class);

// Resource routes for books
Route::resource('books', BookController::class);


