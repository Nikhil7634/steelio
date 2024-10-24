<?php include'../includes/header.php' ?>
<?php include'../includes/asidebar.php' ?>

 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include'../includes/navbar.php' ?>
 
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row min-vh-80">
        <div class="col-6 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Material Design Icons</h6>
                <p class="mb-0 text-white ps-3">Handcrafted by our friends from
                  <a class="text-white font-weight-bold" target="_blank" href="https://fonts.google.com/icons">Google</a>
                </p>
              </div>
            </div>
            <div class="card-body">
              <p>Through most of the examples in this dashboard, we have used the default <a href="https://fonts.google.com/icons">Icons for the Material Design</a> provided by Google.</p>
              <i class="material-icons text-2xl">face</i>
            </div>
          </div>
        </div>
      </div>
      <?php include'../includes/footer.php' ?>
 
    </div>
  </main>
  <?php include'../includes/setting.php' ?>
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>