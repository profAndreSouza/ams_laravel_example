<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function index() {
        $books = Book::with('categories')->get();
        return view('books.index', compact('books'));
    }

    function show(Book $book) {
        return view('books.show', compact('book'));
    }

}
