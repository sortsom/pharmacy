<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Team 7 develop pharmacy</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admins/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admins/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admins/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admins/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admins/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admins/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admins/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admins/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admins/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admins/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admins/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admins/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!--  App -->
<script src="{{asset('admins/dist/js/adminlte.js')}}"></script>
<!--  for demo purposes -->
<script src="{{asset('admins/dist/js/demo.js')}}"></script>
<!--  dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admins/dist/js/pages/dashboard.js')}}"></script>
<!--data table -->
<script src="{{asset('https://code.jquery.com/jquery-3.5.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js')}}"></script>
<!--table rule-->

<script>
    $(document).ready(function() {
        $('#orderlist').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>

</body>
</html>
