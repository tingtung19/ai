<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="admin/assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <?php include ("admin/layout/header-meta.php") ;?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include('admin/layout/sidebar.php'); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include ("admin/layout/navbar.php"); ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-6">
                <!-- Congratulations card -->
                <div class="col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-body text-nowrap">
                      <h5 class="card-title mb-0 flex-wrap text-nowrap">Welcome Datang Admin! 🎉</h5>
                      <p class="mb-2">Total Check</p>
                      <h4 class="text-primary mb-0">42</h4>
                      <p class="mb-2">78% accuracy rate 🚀</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">View Report</a>
                    </div>
                    <img
                      src="admin/assets/img/illustrations/trophy.png"
                      class="position-absolute bottom-0 end-0 me-5 mb-5"
                      width="83"
                      alt="view sales" />
                  </div>
                </div>
                <!--/ Congratulations card -->

              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include("admin/layout/footer.php") ;?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php include ("admin/layout/footer-meta.php");?>
  </body>
</html>
