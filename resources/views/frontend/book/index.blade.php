@extends('frontend.template.default')

@section('content')

<h2>Koleksi Buku</h2>
<blockquote>Koleksi buku yang dapat dipinjam</blockquote>
    @foreach ($books as $book)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
              <img src="assets/covers/{{ $book->cover }}" height="200px">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h6>{{ Str::limit($book->title, 20) }}</h6>
                <p>{{ Str::limit($book->description, 100) }}</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
            </div>
        </div>
    </div>
    @endforeach
<br>

{{ $books->links('vendor.pagination.materialize') }}
@endsection
