<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;

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

    public function show(Book $book) {
        return view('frontend.book.show', [
            'book' => $book
        ]);
    }
    public function borrow(Book $book) {
        $user = auth()->user();

        if ($user->borrow()->where('books.id', $book->id)->count() > 0) {
            return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title);
        }

        $user->borrow()->attach($book);
        $book->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil meminjam buku');
    }
}
