<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\PostController;
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
// magazine
Route::get('/magazines/index', [MagazineController::class, "index"])->name("magazines_");
Route::get('/magazines/create', [MagazineController::class, "create"])->name("magazines_create_");
Route::post('/magazines/submit', [MagazineController::class, "store"])->name("magazines_submit_");
Route::get('/magazines/show/{magazine}', [MagazineController::class, "show"])->name("magazines_show_");
Route::get('/magazines/edit/{magazine}', [MagazineController::class, "edit"])->name("magazines_edit_");
Route::put('/magazines/update/{magazine}', [MagazineController::class, "update"])->name("magazines_update_");
Route::delete('/magazines/destroy/{magazine}', [MagazineController::class, "destroy"])->name("magazines_destroy_");

// post
Route::get('/posts/index', [PostController::class, "index"])->name("posts_");
Route::get('/posts/create', [PostController::class, "create"])->name("posts_create_");
Route::post('/posts/submit', [PostController::class, "store"])->name("posts_submit_");
Route::get('/posts/show/{post}', [PostController::class, "show"])->name("posts_show_");
Route::get('/posts/edit/{post}', [PostController::class, "edit"])->name("posts_edit_");


