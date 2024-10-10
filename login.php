<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="admin/assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="admin/assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="admin/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="admin/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6 mx-4">
          <!-- Login -->
          <div class="card p-7">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="index.php" class="app-brand-link gap-3">
                <img src="/assets/images/logo.png" alt=""></br>
              </a>
              <span class="app-brand-text demo text-heading fw-semibold"></span>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-1">
              <p class="mb-5"> Please login</p>

              <form id="formAuthentication" class="mb-5" action="/dashboard.php" method="POST">
                <div class="form-floating form-floating-outline mb-5">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email-username"
                    placeholder="Enter your email or username"
                    autofocus />
                  <label for="email">Email or Username</label>
                </div>
                <div class="mb-5">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control"
                          name="password"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" />
                        <label for="password">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="ri-eye-off-line ri-20px"></i></span>
                    </div>
                  </div>
                </div>
                <!-- <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                  <a href="auth-forgot-password-basic.html" class="float-end mb-1">
                    <span>Forgot Password?</span>
                  </a>
                </div> -->
                <div class="mb-5">
                  <button class="btn btn-primary d-grid w-100" type="submit">login</button>
                </div>
              </form>

              <!-- <p class="text-center mb-5">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p> -->
            </div>
          </div>
          <!-- /Login -->
          <img
            src="admin/assets/img/illustrations/tree-3.png"
            alt="auth-tree"
            class="authentication-image-object-left d-none d-lg-block" />
          <img
            src="admin/assets/img/illustrations/auth-basic-mask-light.png"
            class="authentication-image d-none d-lg-block"
            height="172"
            alt="triangle-bg"
            data-app-light-img="illustrations/auth-basic-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
          <img
            src="admin/assets/img/illustrations/tree.png"
            alt="auth-tree"
            class="authentication-image-object-right d-none d-lg-block" />
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
