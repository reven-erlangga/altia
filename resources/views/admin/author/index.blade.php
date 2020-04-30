@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penulis</h3>
    </div>
    <div class="box-body">
        <table id="authors-table" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
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
        ajax: 'author/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
        ]
    });
});
</script>
@endpush
