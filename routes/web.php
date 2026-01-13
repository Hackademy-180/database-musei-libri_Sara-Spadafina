<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
//home
Route::get('/', [PublicController::class, "home"])->name("home_");
// libri
Route::get('/books/index', [BookController::class, "booksIndex"])->name("books_");
Route::get('/books/create', [BookController::class, "booksCreate"])->name("books_create_");
Route::post('/books/submit', [BookController::class, "booksSubmit"])->name("books_submit_");
// musei
Route::get('/museums/index', [MuseumController::class, "museumsIndex"])->name("museums_");
Route::get('/museums/create', [MuseumController::class, "museumsCreate"])->name("museums_create_");
Route::post('/museums/submit', [MuseumController::class, "museumsSubmit"])->name("museums_submit_");
