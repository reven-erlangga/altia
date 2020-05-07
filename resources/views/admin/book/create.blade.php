@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Tambah Data Buku</h3>
        </div>
        <div class="box-body">
            <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group @error('title') has-error @enderror">
                    <label for="">Judul Buku</label>
                    <input type="text" name="title" class="form-control" placeholder="Contoh : Harry Potter" value="{{ old('name') }}">
                    @error('title')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('description') has-error @enderror">
                    <label for="">Deskripsi Buku</label>
                    <textarea name="description" id="description" cols="0" rows="3" class="form-control" placeholder="Tuliskan deskripsi">{{ old('description') }}</textarea>
                    @error('description')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="">Author</label>
                    <select name="author_id" id="author_id" class="form-control select2">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('cover') has-error @enderror">
                    <label for="">Sampul Buku</label>
                    <input type="file" name="cover" class="form-control" >
                    @error('cover')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('qty') has-error @enderror">
                    <label for="">Jumlah Buku</label>
                    <input type="text" name="qty" class="form-control" placeholder="Masukan Jumlah Buku" value="{{ old('qty') }}">
                    @error('qty')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-grou">
                    <input type="submit" value="Tambah Data" class="btn btn-primary">
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
@endpush
