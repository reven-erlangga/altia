<!DOCTYPE html>
<html>

@include('admin.templates.partials.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        {{-- Header --}}
        @include('admin.templates.partials.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.templates.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.templates.partials.footer')

        <!-- Control Sidebar -->
        @include('admin.templates.partials.control')
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    @include('admin.templates.partials.script')
</body>
</html>
