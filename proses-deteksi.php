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

            <div class="col-xxl">
              <div class="card mb-6">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Cancer Detection Form</h5>
                  <small class="text-muted float-end">Upload the patient's ultrasound image below</small>
                </div>
                <div class="card-body">
                  <form  action="proses-hasil-deteksi.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Patient Name</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="ri-user-line ri-20px"></i></span>
                          <select class="form-control" id="basic-icon-default-fullname" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="basic-icon-default-fullname2">
                            <option value="Laki-laki"></option>Patient Name A</option>
                            <option value="Laki-laki">Patient Name B</option>
                            <option value="Laki-laki">Patient Name C</option>
                            <option value="Laki-laki">Patient Name D</option>
                          </select>
                        </div>
                      </div>
                    </div>     

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Upload USG patient </br> (Front view)</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="file" id="formFileMultiple" multiple="" accept="image/png, image/jpeg">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Upload USG patient </br> (Side view)</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <input class="form-control" type="file" id="formFileMultiple" multiple="" accept="image/png, image/jpeg">
                        </div>
                      </div>
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Proses</button>
                      </div>
                    </div>
                  </form>
                </div>
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
