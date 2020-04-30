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
        <table id="authors-table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table></div>
</div>
@endsection


@push('scripts')
<script>
$(function() {
    $('#authors-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.author.data') }}',
        columns: [
            { data: 'DT_RowIndex', orderable : false, searchable : false},
            { data: 'name', name: 'name' },
            { data: 'action', name: 'action'},
        ]
    });
});
</script>
@endpush
