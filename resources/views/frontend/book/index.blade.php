@extends('frontend.template.default')

@section('content')

<h2>Koleksi Buku</h2>
<blockquote>Koleksi buku yang dapat dipinjam</blockquote>
<div class="row">
    @foreach ($books as $book)
    <div class="col s6 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
              <img src="{{ asset("assets/covers/$book->cover") }}" height="200px">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h6>
                    <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 20) }}</a>
                </h6>
                <p>{{ Str::limit($book->description, 100) }}</p>
              </div>
              <div class="card-action">
                  <form action="{{ route('book.borrow', $book) }}" method="POST">
                    <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                  </form>
              </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<br>

{{ $books->links('vendor.pagination.materialize') }}
@endsection
