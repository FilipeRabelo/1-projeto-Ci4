<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer layout-fixed " style="background-color: #17a2b8; color: black" >
  <!--  -->
  <!-- To the right -->
  <div class=" float-right d-none d-sm-inline">
    <strong>Dev. <a href="https://www.linkedin.com/in/filipe-rabelo-lana-648799228/" target="_blank">Filipe Rabelo</a> </strong>
  </div>
  <!-- Default to the left -->
  <strong>All Tech &copy; <?= date('Y') ?></strong> Todos os direitos reservados!

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- JAVASCRIPT -->

  <!-- jQuery -->
  <script src="<?= base_url("theme/plugins/jquery/jquery.min.js") ?>"></script>

  <!-- Bootstrap 4 -->
  <script src="<?= base_url("theme/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>

  <!-- DataTables  & Plugins -->
  <script src="<?= base_url("theme/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-buttons/js/dataTables.buttons.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/jszip/jszip.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/pdfmake/pdfmake.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/pdfmake/vfs_fonts.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-buttons/js/buttons.html5.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-buttons/js/buttons.print.min.js") ?>"></script>
  <script src="<?= base_url("theme/plugins/datatables-buttons/js/buttons.colVis.min.js") ?>"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url("theme/dist/js/adminlte.min.js") ?>"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

  </body>

  </html>