<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Author as author_model;

class DataController extends Controller
{
    public function authors() {
        $authors = author_model::orderBy('name', 'ASC');
        return datatables($authors)
            ->addColumn('action', function($authors) {
                return '<a href="' .route('admin.author.edit', $authors). '" class="btn btn-warning">Edit</a>';
            })
            ->addIndexColumn()
            ->toJson();
    }

}
