@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
        <div class="pull-right">
            <a href="{{route('admin.author.create')}}" class="btn btn-primary">Tambah Penulis</a>
        </div>
    </div>
    <div class="box-body">
        <table id="books-table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Deskripsi</th>
                    <th>Sampul</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<form action="" method="POST" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="hapus" style="display: none">
</form>
@endsection


@push('scripts')
<script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
@include('admin.templates.partials.alert')
<script>
$(function() {
    $('#books-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.book.data') }}',
        columns: [
            { data: 'DT_RowIndex', orderable : false, searchable : false},
            { data: 'title', name: 'title' },
            { data: 'author', name: 'author'},
            { data: 'description', name: 'description'},
            { data: 'cover', name: 'cover'},
            { data: 'action', name: 'action'},
        ]
    });
});
</script>
@endpush
