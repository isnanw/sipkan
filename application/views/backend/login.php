<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title><?= $title; ?></title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="<?= $site_title; ?> - Sistem Informasi Perikanan" />
    <meta name="author" content="https://bakulcoding.com/" />
    <meta name="keywords" content="<?= $site_title; ?> - Sistem Informasi Perikanan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  icon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/keren/'); ?>dist/images/logos/icon.png" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="<?= base_url('assets/keren/'); ?>dist/css/style.min.css" />
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
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-lg-6 col-xl-8 col-xxl-8">
              <a href="<?= base_url(); ?>" class="mb-2 fs-7 fw-bolder text-nowrap logo-img d-block px-4 py-9 pb-5 pb-xl-0 w-100">
                <img src="<?= base_url('assets/keren/'); ?>/dist/images/logos/icon.png" width="50" alt=""> <?= $site_title; ?>
              </a>
              <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="<?= base_url('assets/keren/'); ?>/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-lg-6 col-xl-4 col-xxl-4">
              <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                <div class="d-flex align-items-center w-100 h-100">
                  <div class="card-body px-xxl-5">
                    <h2 class="mb-3 fs-7 fw-bolder">Welcome to <?= $site_title; ?></h2>
                    <p class=" mb-9">Your Admin Dashboard</p>
                    <div class="position-relative text-center my-4">
                      <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">Sign In </p>
                      <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                    </div>
                    <?= form_open('login/auth'); ?>
                    <?= $this->session->flashdata('msg');?>
                      <div class="mb-3">
                        <label for="username_cgtv_122021" class="form-label">Username</label>
                        <!-- <input type="email" class="form-control border border-info" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                        <?= $form_username; ?>
                      </div>
                      <div class="mb-4">
                        <label for="password_cgtv_122021" class="form-label">Password</label>
                        <!-- <input type="password" class="form-control border border-info" id="exampleInputPassword1"> -->
                        <?= $form_password; ?>
                      </div>
                      <div class="form-check form-check-lg d-flex align-items-end">
                          <input class="form-check-input me-2" type="checkbox" onclick="myFunction2()" id="flexCheckDefault">
                          <label class="form-check-label text-gray-600" for="flexCheckDefault">
                              Show Password
                          </label>
                      </div>
                      <script>
                        function myFunction2() {
                        var x = document.getElementById("inputPassword1");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                      </script>
                      <hr>
                      <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--  Import Js Files -->
    <script src="<?= base_url('assets/keren/'); ?>dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/keren/'); ?>dist/libs/simplebar/dist/simplebar.min.js"></script>
    <!-- <script src="<?= base_url('assets/keren/'); ?>dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <!--  core files -->
    <script src="<?= base_url('assets/keren/'); ?>dist/js/app.min.js"></script>
    <script src="<?= base_url('assets/keren/'); ?>dist/js/app.init.js"></script>
    <script src="<?= base_url('assets/keren/'); ?>dist/js/app-style-switcher.js"></script>
    <script src="<?= base_url('assets/keren/'); ?>dist/js/sidebarmenu.js"></script>

    <script src="<?= base_url('assets/keren/'); ?>dist/js/custom.js"></script>
  </body>

</html>