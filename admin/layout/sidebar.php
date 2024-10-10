<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <!-- <img src="/assets/images/logo.png" alt=""></br> -->
            </a>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Admin</span>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="menu-toggle-icon d-xl-block align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
              <a
                href="dashboard.php"
                class="menu-link">
                <i class="menu-icon tf-icons  ri-home-smile-line"></i>
                <div data-i18n="Support">Dasboard</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-file-copy-line"></i>
                <div data-i18n="Dashboards">Master Data</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="master-pasien.php" class="menu-link">
                    <div data-i18n="Without menu">Patient Data</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="master-user.php" class="menu-link">
                    <div data-i18n="Without navbar">Users Data</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="master-kriteria.php" class="menu-link">
                    <div data-i18n="Without navbar">Criteria Data</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="master-bobot.php" class="menu-link">
                    <div data-i18n="Without navbar">Weighting Data</div>
                  </a>
                </li>
              
              </ul>
            </li>

            <!-- Layouts -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-remixicon-line"></i>
                <div data-i18n="Layouts">Process</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="proses-registrasi-pasien.php" class="menu-link">
                    <div data-i18n="Without menu">Patient Registration</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="proses-screening.php" class="menu-link">
                    <div data-i18n="Without menu">Sreening Process</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="proses-deteksi.php" class="menu-link">
                    <div data-i18n="Without navbar">Detection Process</div>
                  </a>
                </li>
              
              </ul>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-article-line"></i>
                <div data-i18n="Layouts">Report</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="laporan-hasil-deteksi.php" class="menu-link">
                    <div data-i18n="Without menu">Detection Process</div>
                  </a>
                </li>
                
              
              </ul>
            </li>

            <li class="menu-item">
              <a
                href="/"
                class="menu-link">
                <i class="menu-icon tf-icons ri-logout-box-r-line"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li>
          </ul>
        </aside>