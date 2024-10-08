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

            <div class="card">
                <h5 class="card-header">Patient Data</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Address</th>
                        <th>TTL</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php for ($i=0; $i < 5 ; $i++)  : ?>
                        <tr>
                            <td>18973839845</td>
                            <td> Patient Name A</td>
                            <td>Yogyakrta</td>
                            <td>Yogyakrta, 01 Januari 2010</td>
                            <td>085727757687</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href=""><i class="ri-pencil-line me-1"></i> Edit</a>
                                <a class="btn btn-sm btn-danger" href=""><i class="ri-delete-bin-6-line me-1"></i> Delete</a>                            
                            </td>
                        
                        <?php endfor; ?>
                      </tr>
                    </tbody>
                  </table>
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
