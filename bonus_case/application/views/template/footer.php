</div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
  <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://localhost/sppd">ECAMPUZ TEST</a>.</strong>
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- js tambah dan edit -->
<script src="<?= base_url('assets/js/')?>jquery-3.1.1.min.js"></script>

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/adminlte/')?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/adminlte/')?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/adminlte/')?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/adminlte/')?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/adminlte/')?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/adminlte/')?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/')?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/adminlte/')?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/adminlte/')?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminlte/')?>dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/adminlte/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/adminlte/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?php echo base_url('assets/plugins/sweetalert/sweetalert.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/sweetalert/dialogs.js'); ?>"></script>

<script type="text/javascript">

  function imageIsLoaded(e) {
    $('#img-profile').attr('src', e.target.result);

  };
  function clickToBrowseFile() {
    $('input[name="img_profil_admin"]').trigger('click');
    $('input[name="img_profil_admin"]').attr('cek','1');
  }

  $('input[name="img_profil_admin"]').change(function () {
    console.log(this.files[0]);
    if (this.files && this.files[0]) {
      var reader = new FileReader();
      reader.onload = imageIsLoaded;
      reader.readAsDataURL(this.files[0]);
    }
  });
  $('input[name="img_profil_admin"]').click(function(){

    if ($(this).attr('cek') == 1) {
      return false;
    }
  });

  $(function () {

    $('input[name="img_profil_admin"]').change(function () {
      console.log(this.files[0]);
      if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(this.files[0]);
      }
    });
    $('input[name="img_profil_admin"]').click(function(){

      if ($(this).attr('cek') == 1) {
        return false;
      }
    });

    <?php

    if (!is_null($this->session->flashdata('message'))) {
      $message = $this->session->flashdata('message');
      echo 'swal({
        title:"Berhasil",
        text: "'.$message['text'].'",
        timer: 10000,
        showConfirmButton: true,
        type: "'.$message['type'].'"
      });';
    }
    ?>
  });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>


<script src="<?= base_url('assets/js/')?>script.js"></script>

</body>
</html>