<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Author;
use App\Book;

class DataController extends Controller
{
    public function authors() {
        $authors = Author::orderBy('name', 'ASC');
        return datatables($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function books() {
        $books = Book::orderBy('title', 'ASC');
        return datatables($books)
            ->addColumn('author', function(Book $model) {
                return $model->author->name;
            })
            ->editColumn('cover', function(Book $model) {
                return '<img src="/assets/covers/'. $model->cover .'" height="100px">';
            })
            ->addColumn('action', 'admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

}
