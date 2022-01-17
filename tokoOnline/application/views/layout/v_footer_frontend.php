</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Silahkan hubungi kontak kami 087869209576
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2021 <a href="">My Kitt Store</a>. Jl.Palem Puri Raya No. 20, RT.005/RW.003, Kp. Utan, Kel.Pdk Pucung, Kec.Pdk Aren Tangsel 15229</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script>
  $(function() {
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
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000)
</script>

</body>

</html>