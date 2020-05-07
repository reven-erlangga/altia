<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::paginate(10);
        // foreach ($books as $book) {

        //     dd($book->cover);
        // }
        return view('frontend.book.index', [
            'books' => $books,
        ]);
    }
}
