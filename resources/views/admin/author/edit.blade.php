@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <form action="{{ route('admin.author.update', $author) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Contoh : Syahranti Ainun" value="{{ $author->name }}">
                </div>

                <div class="form-grou">
                    <input type="submit" value="Perbaharui Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
