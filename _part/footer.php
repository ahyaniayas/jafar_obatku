
  <!-- TENTANG -->
  <div class="about">
    <div class="copyright">
      &copy; Copyright MJ 2020
    </div>
  </div>
  <!-- END ABOUT -->

  <!-- JAVASCRIPT -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="./assets/plugins/jquery/jquery.dataTables.min.js"></script>
  <script src="./assets/plugins/bootstrap/js/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="./assets/plugins/bootstrap/js/bootstrap.popper.min.js"></script> -->
  <script src="./assets/js/custom.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
    $(document).ready(function() {
      $('#tabel-kamus').DataTable({
        // disini untuk memanipulasi datatablenya termasuk settingan untuk pencarian
        // nama obatkan adanya di kolom ke 1. maka selain kolom ke 1 dimatikan fungsi pencariannya
        "columnDefs": [
          // ini fungsi untuk mematikan pencarian di kolom selain kolom 1
          { "targets": [0,3,4,5], "searchable": false }
          // coba
        ]

      });
    } );
  </script>
  <!-- JAVASCRIPT -->
</body>
</html>