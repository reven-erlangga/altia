<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Author as author_model;

class DataController extends Controller
{
    public function authors() {
        return datatables(author_model::all())->make(true);
    }

}
