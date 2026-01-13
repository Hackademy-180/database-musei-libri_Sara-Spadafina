<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booksIndex() {
        $libri=Book::all();
        return view('books.index', compact("libri"));
    }
    public function booksCreate() {
    return view('books.create');
    }
    public function booksSubmit(Request $request) {
        Book::create([
            "title"=>$request->title,
            "author"=>$request->author,
            "year"=>$request->year,
            "description"=>$request->description,
        ]);
        return redirect(route("books_create_"));
    }

}
