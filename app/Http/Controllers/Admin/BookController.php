<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Author;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index', [
            'title' => 'Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create', [
            'title' => 'Tambah Buku',
            'authors' => Author::orderBy('name', 'ASC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required',
			'cover' => 'required|file|image',
            'qty' => 'required|numeric',
        ]);

        if($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $image_file = time()."_".$cover->getClientOriginalName();
            $cover->move('assets/covers', $image_file);
        }

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $image_file,
            'qty' => $request->qty,
        ]);

        return redirect()->route('admin.book.index')->withSuccess('Data Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'title' => 'Ubah data buku',
            'book' => $book,
            'authors' => Author::orderBy('name', 'ASC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required',
			// 'cover' => 'required|file|image',
            'qty' => 'required|numeric',
        ]);

        $image_file = $book->cover;

        if($request->hasFile('cover')) {
            $delete = File::delete('assets/covers/'.$book->cover);
            $cover = $request->file('cover');
            $image_file = time()."_".$cover->getClientOriginalName();
            $cover->move('assets/covers', $image_file);
        }

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $image_file,
            'qty' => $request->qty,
        ]);

        return redirect()->route('admin.book.index')->withSuccess('Data Buku Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
