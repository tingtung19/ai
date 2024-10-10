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
                  <h5 class="mb-0">Hasil Deteksi Kanker</h5>
                  <small class="text-muted float-end">Upload gambar USG pasien dibawah ini</small>
                </div>
                <div class="card-body">
                  <form  action="hasil-deteksi.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Patient Name</label>
                      <div class="col-sm-10">                        
                          <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" value="Patient Name" aria-describedby="basic-icon-default-phone2" disabled>                   
                      </div>
                    </div>


                    <div class="row mb-4">        
                      <label class="col-sm-2 form-label">Symptoms of patient</label>
                      <div class="col-sm-10">
                        
                          <ol class="list-group list-group-numbered">
                            <li class="list-group-item">Symptoms patient a</li>
                            <li class="list-group-item">Symptoms patient b</li>
                            <li class="list-group-item">Symptoms patient c</li>
                            <li class="list-group-item">Symptoms patient d</li>
                            <li class="list-group-item">Symptoms patient e</li>
                          </ol>
                      </div>
                    </div>    

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-fullname">USG Images</label>
                      <div class="col-sm-10">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">                          
                            <img src="admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">                          
                          </div>

                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message"> Detection Result by KGS</label>
                      <div class="col-sm-10">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <?php $hasil = rand(1,3);?>
                            <?php if($hasil==1) : ?>
                              <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Undetected Cancer</button>
                            <?php elseif($hasil==2) : ?>
                              <button type="button" class="btn rounded-pill btn-warning waves-effect waves-light">Benign Cancer</button>
                            <?php elseif($hasil==3) : ?>
                              <button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">Malignant Cancer</button>
                            <?php endif; ?>
                          </div>

                      </div>
                    </div>
                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message"> Scan Result by CNN</label>
                      <div class="col-sm-10">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <?php $hasil = isset($_GET['rand']) ?  rand(1,3) : $hasil ;?>
                            <?php if($hasil==1) : ?>
                              <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Undetected Cancer</button>
                            <?php elseif($hasil==2) : ?>
                              <button type="button" class="btn rounded-pill btn-warning waves-effect waves-light">Benign Cancer</button>
                            <?php elseif($hasil==3) : ?>
                              <button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">Malignant Cancer</button>
                            <?php endif; ?>
                          </div>

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
