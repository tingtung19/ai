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
                  <h5 class="mb-0">Patient Registration Form</h5>
                  <small class="text-muted float-end">Fill in the patient data below</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="proses-screening.php">
                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Full name</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="ri-user-line ri-20px"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Full name" aria-label="Full name" aria-describedby="basic-icon-default-fullname2">
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-company">NIK</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text"><i class="ri-building-4-line ri-20px"></i></span>
                          <input type="text" id="basic-icon-default-company" class="form-control" placeholder="12312312312312" aria-label="12312312312312" aria-describedby="basic-icon-default-company2">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Place and date of birth</label>
                      <div class="col-sm-4">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="ri-chat-4-line ri-20px"></i></span>
                          <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="Jakarta" aria-label="Jakarta" aria-describedby="basic-icon-default-phone2">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="ri-chat-4-line ri-20px"></i></span>
                          <input type="date" id="basic-icon-default-message" class="form-control" aria-describedby="basic-icon-default-message2"></input>
                        </div>
                      </div>
                    </div>


                    <!-- <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="ri-mail-line ri-20px"></i></span>
                          <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                          <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                        </div>
                        <div class="form-text">You can use letters, numbers &amp; periods</div>
                      </div>
                    </div> -->

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone Number</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-phone2" class="input-group-text"><i class="ri-phone-fill ri-20px"></i></span>
                          <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2">
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Address</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="ri-chat-4-line ri-20px"></i></span>
                          <textarea id="basic-icon-default-message" class="form-control" placeholder="Yogyakarta" aria-label="Yogyakarta" aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Gender</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="ri-user-line ri-20px"></i></span>
                          <select class="form-control" id="basic-icon-default-fullname" placeholder="Gender" aria-label="Gender" aria-describedby="basic-icon-default-fullname2">
                            <option value="Laki-laki">Male</option>
                            <option value="Perempuan">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mb-4">
                      <label class="col-sm-2 form-label" for="basic-icon-default-message">Additional Information</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="ri-chat-4-line ri-20px"></i></span>
                          <textarea id="basic-icon-default-message" class="form-control" placeholder="Additional Information" aria-label="Additional Information" aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                      </div>
                    </div>



                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Next</button>
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
