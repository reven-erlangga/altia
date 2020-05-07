@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Edit Data Buku</h3>
        </div>
        <div class="box-body">
            <form action="{{ route('admin.book.update', $book) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group @error('title') has-error @enderror">
                    <label for="">Judul Buku</label>
                    <input type="text" name="title" class="form-control" placeholder="Contoh : Harry Potter" value="{{ $book->title ?? old('title') }}">
                    @error('title')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('description') has-error @enderror">
                    <label for="">Deskripsi Buku</label>
                    <textarea name="description" id="description" cols="0" rows="3" class="form-control" placeholder="Tuliskan deskripsi">{{ $book->description ?? old('description') }}</textarea>
                    @error('description')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="">Author</label>
                    <select name="author_id" id="author_id" class="form-control select2">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{$author->id == $book->author_id ? 'selected' : ''}}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('cover') has-error @enderror">
                    <label for="">Sampul Buku</label>
                    <input type="file" id="cover" name="cover" class="form-control" style="display: none">
                    <div class="row">
                        <div class="col-xs-4">
                            <input id="file-name" type="text" class="form-control" value="{{ $book->cover }}" readonly>
                        </div>
                        <div class="col-xs-2">
                            <label for="cover" class="btn btn-primary form-control">Browse</label>
                        </div>
                    </div>
                    @error('cover')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('qty') has-error @enderror">
                    <label for="">Jumlah Buku</label>
                    <input type="text" name="qty" class="form-control" placeholder="Masukan Jumlah Buku" value="{{ $book->qty ?? old('qty') }}">
                    @error('qty')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grou">
                    <input type="submit" value="Edit Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2();
    </script>

    <script>
        document.querySelector("#cover").onchange = function(){
            console.log('chage');
            document.getElementById('file-name').value= this.files[0].name;
        }
    </script>
@endpush
