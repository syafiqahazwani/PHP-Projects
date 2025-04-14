<!-- Footer -->
<footer class="main-footer">
    <strong>Made by <a href="">Yaze Frost</a></strong>

    <div class="float-right d-none d-sm-inline-block">
      <b></b>
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark"> 
  </aside>
</div>

<!-- jQuery -->
<script src="{{asset('AdminLTE-master')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE-master')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge("uibutton{{asset('AdminLTE-master')}}/", $.ui.button) 
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE-master')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE-master')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE-master')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE-master')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE-master')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE-master')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('AdminLTE-master')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE-master')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE-master')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE-master')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-master')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-master')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminLTE-master')}}/dist/js/pages/dashboard.js"></script>
<!-- Tooltip -->
<script src="{{asset('AdminLTE-master')}}/plugins/popper/popper.min.js"></script>
<script>
$(function () {
    $('[data-toggle2="tooltip"]').tooltip()
  })
  </script>

</body>
</html>