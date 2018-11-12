      

<!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark  mt-4">
  <div class="container">
    <p class="m-0 text-center text-white">Eva Bukli - Code Review 10 - 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>

  $(document).ready(function() {
    $('#book').click(function() {

      $(".type2,.type3").hide(1000);
      $(".type1").show(1000);
    })

    $('#cd').click(function() {

      $(".type1,.type3").hide(1000);
      $(".type2").show(1000);
    })

    $('#dvd').click(function() {

      $(".type2,.type1").hide(1000);
      $(".type3").show(1000);
    })

    $('#all').click(function() {

      $(".type2,.type1,.type3").show(1000);
    })
  });
</script>
</body>

</html>