<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.book.destroy', $model) }}" id="delete" class="btn btn-danger">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var action = $(this).attr('href');

        Swal.fire({
            title: 'Apakah kamu yakin hapus data ini ?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, hapus data!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = action;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                'Terhapus!',
                'Data dihapus.',
                'success'
                )
            }
            })

    })
</script>
