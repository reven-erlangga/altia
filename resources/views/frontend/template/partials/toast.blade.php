@if (session('toast'))
<script>
    M.toast({html: '{{ session('toast') }}'})

</script>

@endif
