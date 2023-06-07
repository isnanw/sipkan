<!DOCTYPE html>
<html lang="en">

<head>
  <!--  Title -->
  <title><?= $title . ' || ' . $site_title ?></title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="<?= $site_title; ?>" />
  <meta name="author" content="" />
  <meta name="keywords" content="<?= $site_title; ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  icon -->
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" />
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= base_url('assets/keren/'); ?>dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Core Css -->
  <link id="themeColors" rel="stylesheet" href="<?= base_url('assets/keren/'); ?>dist/css/style.min.css" />

  <link href="<?php echo base_url() . 'assets/extensions/toastify-js/src/toastify.css' ?>" type="text/css" rel="stylesheet" />
  <link href="<?php echo base_url() . 'assets/extensions/sweetalert2/sweetalert2.min.css' ?>" type="text/css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url('assets/keren/'); ?>dist/libs/prismjs/themes/prism.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/keren/'); ?>dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!-- Preloader -->
  <div class="preloader">
    <img src="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img fs-5 fw-bolder">
            <img src="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" class="dark-logo" width="50" alt="" />
            <img src="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" class="light-logo" width="50" alt="" /> <?= $site_title; ?>
          </a>
          <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <!-- =================== -->
            <!-- Dashboard -->
            <!-- =================== -->
            <li class="sidebar-item <?= $this->uri->segment(2) == 'dashboard' ? 'selected' : '' ?>">
              <a class="sidebar-link <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>" href="<?= site_url('backend/dashboard'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-home-hand"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <!-- ============================= -->
            <!-- Apps -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Master</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-database"></i>
                </span>
                <span class="hide-menu">Data Master</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/lokasi'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Lokasi</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/jeniskolam'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Jenis Kolam</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/jenisikan'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Jenis Ikan</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/jenisbudidaya'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Jenis Budidaya</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/jeniskomoditas'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Jenis Komoditas</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- ============================= -->
            <!-- PAGES -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Data</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-stack-pop"></i>
                </span>
                <span class="hide-menu">Data Dasar</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/pembenihan'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Produksi Pembenihan Ikan</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/pembesaran'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Data Pembesaran Budidaya</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-stack-pop"></i>
                </span>
                <span class="hide-menu">Produksi Budidaya Ikan</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/ts'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">TS</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/kat'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">KAT</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/kjtt'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">KJT T</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/kjat'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">KJA T</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/mnp'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">MNP</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/rl'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">RL</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/kjal'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">KJA L</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- ============================= -->
            <!-- UI -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Setting Apps</span>
            </li>
            <!-- =================== -->
            <!-- UI Elements -->
            <!-- =================== -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-settings-code"></i>
                </span>
                <span class="hide-menu">Pengaturan</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/detail_website'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Website</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/profil'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Profile</span>
                  </a>
                </li>
                <hr>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/role'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Role</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="<?= site_url('backend/users'); ?>" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Pengguna</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

        </nav>
        <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="<?= base_url() . 'assets/images/profilusers/' . $this->session->userdata('user_photo'); ?>" class="rounded-circle" width="40" height="40" alt="">
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold"><?= $this->session->userdata('name'); ?></h6>
              <span class="fs-2 text-dark"><?= $this->session->userdata('role'); ?></span>
            </div>
            <a href="<?= site_url('logout'); ?>"><button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
              </button></a>
          </div>
        </div>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->


    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown-hover d-none d-lg-block">
              <strong class="nav-link"><?= $tahun; ?></strong>
            </li>
          </ul>

          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
              <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                <i class="ti ti-align-justified fs-7"></i>
              </a>
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                <li class="nav-item dropdown">
                  <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex align-items-center">
                      <div class="user-profile-img">
                        <img src="<?= base_url() . 'assets/images/profilusers/' . $this->session->userdata('user_photo'); ?>" class="rounded-circle" width="35" height="35" alt="" />
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="profile-dropdown position-relative" data-simplebar>
                      <div class="py-3 px-7 pb-0">
                        <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                      </div>
                      <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                        <img src="<?= base_url() . 'assets/images/profilusers/' . $this->session->userdata('user_photo'); ?>" class="rounded-circle" width="80" height="80" alt="" />
                        <div class="ms-3">
                          <h5 class="mb-1 fs-3"><?= $this->session->userdata('name'); ?></h5>
                          <span class="mb-1 d-block text-dark"><?= $this->session->userdata('role'); ?></span>
                          <p class="mb-0 d-flex text-dark align-items-center gap-2">
                            <i class="ti ti-mail fs-4"></i> <?= $this->session->userdata('email'); ?>
                          </p>
                        </div>
                      </div>
                      <div class="message-body">
                        <a href="<?= site_url('backend/profil'); ?>" class="py-8 px-7 mt-8 d-flex align-items-center">
                          <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                            <img src="<?= base_url() . 'assets/images/profilusers/' . $this->session->userdata('user_photo'); ?>" alt="" width="24" height="24">
                          </span>
                          <div class="w-75 d-inline-block v-middle ps-3">
                            <h6 class="mb-1 bg-hover-primary fw-semibold"> My Profile </h6>
                            <span class="d-block text-dark">Account Settings</span>
                          </div>
                        </a>
                      </div>
                      <div class="d-grid py-4 px-7 pt-8">

                        <a href="<?= site_url('logout'); ?>" class="btn btn-outline-primary">Log Out</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!--  Header End -->