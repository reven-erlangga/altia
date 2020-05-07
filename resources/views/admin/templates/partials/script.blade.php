<!-- jQuery 3 -->
<script src=" {{asset('assets/bower_components/jquery/dist/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- datepicker -->
<script src=" {{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }} "></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=" {{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} "></script>
<!-- Slimscroll -->
<script src=" {{ asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }} "></script>
<!-- FastClick -->
<script src=" {{ asset('assets/bower_components/fastclick/lib/fastclick.js') }} "></script>
<!-- AdminLTE App -->
<script src=" {{ asset('assets/dist/js/adminlte.min.js') }} "></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{ asset('assets/dist/js/pages/dashboard.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<script src=" {{ asset('assets/dist/js/demo.js') }} "></script>

@stack('scripts')
