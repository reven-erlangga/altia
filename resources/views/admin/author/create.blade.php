@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <form action="{{ route('admin.author.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Contoh : Syahranti Ainun">
                </div>

                <div class="form-grou">
                    <input type="submit" value="Tambah Data" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
