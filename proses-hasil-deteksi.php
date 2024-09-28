<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/admin/assets/"
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
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Pasien</label>
                      <div class="col-sm-10">                        
                          <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" value="Nama Pasien" aria-describedby="basic-icon-default-phone2" disabled>                   
                      </div>
                    </div>


                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Tambahan Gejala yang dialami pasien</label>
                      <div class="col-sm-10">                      
                          <textarea id="basic-icon-default-message" class="form-control" placeholder="Gejala Pasien" aria-label="Gejala Pasien" aria-describedby="basic-icon-default-message2"></textarea>                     
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Gambar USG</label>
                      <div class="col-sm-10">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="/admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">                          
                            <img src="/admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">                          
                            <img src="/admin/assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar">                          
                          </div>

                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Hasil Scan</label>
                      <div class="col-sm-10">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <?php $hasil = rand(1,3);?>
                            <?php if($hasil==1) : ?>
                              <button type="button" class="btn rounded-pill btn-success waves-effect waves-light">Kanker Tidak Terdeteksi</button>
                            <?php elseif($hasil==2) : ?>
                              <button type="button" class="btn rounded-pill btn-warning waves-effect waves-light">Kanker Jinak</button>
                            <?php elseif($hasil==3) : ?>
                              <button type="button" class="btn rounded-pill btn-danger waves-effect waves-light">Kanker Ganas</button>
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
