<script src="<?php  echo site_url('assets/plugins') ?>/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php  echo site_url('assets/plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php  echo site_url('assets/plugins') ?>/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php  echo site_url('assets/plugins') ?>/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php  echo site_url('assets/plugins') ?>/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php  echo site_url('assets/plugins') ?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php  echo site_url('assets/plugins') ?>/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php  echo site_url('assets/plugins') ?>/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php  echo site_url('assets/plugins') ?>/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php  echo site_url('assets/plugins') ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php  echo site_url('assets/plugins') ?>/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php  echo site_url('assets/plugins') ?>/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('assets/dist') ?>/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo site_url('assets/dist') ?>/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url('assets/dist') ?>/js/demo.js"></script>

<script src="<?php echo site_url('plugins') ?>/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url('plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="<?php echo site_url('plugins') ?>/iCheck/icheck.min.js"></script>


<!-- jQuery -->
<script src="<?php echo site_url('plugins') ?>/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url('plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo site_url('plugins') ?>/datatables/jquery.dataTables.js"></script>
<script src="<?php echo site_url('plugins') ?>/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="<?php echo site_url('plugins') ?>/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo site_url('plugins') ?>/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('dist/js') ?>/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url('dist/js') ?>/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>


</body>
</html>
