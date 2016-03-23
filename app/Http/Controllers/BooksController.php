<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all(['id', 'title']);
        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
