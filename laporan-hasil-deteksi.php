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
                <h5 class="card-header">Patient Detection Result Report</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark">
                      <tr>
                        <th> Patient ID</th>
                        <th> Patient Name</th>
                        <th> USG Images</th>
                        <th> Result KGS</th>
                        <th> Result CNN</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php for ($i=0; $i < 5 ; $i++)  : ?>
                        <tr>
                            <td>18973839845</td>
                            <td>Patient Name A</td>
                            <td>
                            <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="USG Front View" data-bs-original-title="USG Front View">
                              <img src="admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="USG Side View" data-bs-original-title="USG Side View">
                              <img src="admin/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                            </li>
                          
                          </ul>
                            </td>
                            <td>
                              <?php $hasil = rand(1,3);?>
                              <?php if($hasil==1) : ?>
                                <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Kanker Tidak Terdeteksi</button>
                              <?php elseif($hasil==2) : ?>
                                <button type="button" class="btn rounded-pill btn-warning waves-effect waves-light">Kanker Jinak</button>
                              <?php elseif($hasil==3) : ?>
                                <button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">Kanker Ganas</button>
                              <?php endif; ?>

                            </td>

                            <td>
                              <?php $hasil = isset($_GET['rand']) ?  rand(1,3) : $hasil ;?>
                              <?php if($hasil==1) : ?>
                                <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Kanker Tidak Terdeteksi</button>
                              <?php elseif($hasil==2) : ?>
                                <button type="button" class="btn rounded-pill btn-warning waves-effect waves-light">Kanker Jinak</button>
                              <?php elseif($hasil==3) : ?>
                                <button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">Kanker Ganas</button>
                              <?php endif; ?>

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
