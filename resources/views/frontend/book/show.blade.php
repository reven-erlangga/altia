@extends('frontend.template.default')


@section('content')
<div class="col s12 m12">
    <div class="card horizontal hoverable">
        <div class="card-image">
          <img src=" {{ asset("assets/covers/$book->cover") }} " height="200px">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h6>
                <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 20) }}</a>
            </h6>
            <blockquote>{{ $book->description }}</blockquote>
            <p><i class="material-icons">person</i>{{ $book->author->name }}</p>
            <p><i class="material-icons">book</i>{{ $book->qty }}</p>
          </div>
          <div class="card-action">
            <a href="#" class="btn btn-red accent-1 right waves-effect waves-light">Pinjam Buku</a>
          </div>
        </div>
    </div>
</div>
@endsection
