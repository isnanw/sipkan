<style>
  .welcome-bg-img {
    position: absolute;
    right: 0;
    bottom: 0;
  }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100 bg-light-info overflow-hidden shadow-none">
        <div class="card-body position-relative">
          <div class="row">
            <div class="col-sm-9">
              <div class="d-flex align-items-center mb-7">
                <div class="rounded-circle overflow-hidden me-6">
                  <img src="<?= base_url() . 'assets/images/profilusers/' . $this->session->userdata('user_photo'); ?>"
                    alt="" width="40" height="40">
                </div>
                <h5 class="fw-semibold mb-0 fs-5">Welcome
                  <?= $this->session->userdata('name'); ?>
                </h5>
              </div>
              <div class="d-flex align-items-center">
                <div class="border-end pe-4 border-muted border-opacity-10">
                  <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                    <?= $tahun; ?><i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                  </h3>
                  <p class="mb-0 text-dark">Tahun Input</p>
                </div>
                <div class="ps-4">
                  <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                    <?= $site_title; ?><i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                  </h3>
                  <p class="mb-0 text-dark">
                    <?= $site_deskripsi; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="welcome-bg-img mb-n7 text-end">
                <img src="<?= base_url('assets/keren/'); ?>dist/images/backgrounds/welcome-bg.svg" alt=""
                  class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Owl carousel -->
  <div class="owl-carousel counter-carousel owl-theme">
    <div class="item">
      <div class="card border-0 zoom-in bg-light-primary shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-primary mb-1"> Users </p>
            <h5 class="fw-semibold text-primary mb-0">
              <?= $jmlh_user; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-warning shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-warning mb-1">Jenis Kolam</p>
            <h5 class="fw-semibold text-warning mb-0">
              <?= $jmlh_kolam; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-info shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-info mb-1">Jenis Ikan</p>
            <h5 class="fw-semibold text-info mb-0">
              <?= $jmlh_ikan; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-danger shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-danger mb-1">Jenis Budidaya</p>
            <h5 class="fw-semibold text-danger mb-0">
              <?= $jmlh_budidaya; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-success shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-success mb-1">Pembesaran</p>
            <h5 class="fw-semibold text-success mb-0">
              <?= $jmlh_pembesaran; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-info shadow-none">
        <div class="card-body">
          <div class="text-center">
            <img
              src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg"
              width="50" height="50" class="mb-3" alt="" />
            <p class="fw-semibold fs-3 text-info mb-1">Pembenihan</p>
            <h5 class="fw-semibold text-info mb-0">
              <?= $jmlh_pembenihan; ?>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Row 1 -->
  <div class="row">

    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Revenue Updates</h5>
              <p class="card-subtitle mb-0">Overview of Profit</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">



            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 d-flex align-items-strech">
      <div class="card bg-primary border-0 w-100">
        <div class="card-body pb-0">
          <h5 class="fw-semibold mb-1 text-white card-title"> Best Selling Products </h5>
          <!-- <p class="fs-3 mb-3 text-white">Overview 2023</p> -->
          <div class="text-center mt-1">
            <img src="<?= base_url('assets/keren/'); ?>dist/images/backgrounds/ikan.png" class="img-fluid" alt="" />
          </div>
        </div>
        <div class="card mx-2 mb-2 mt-n2">
          <div class="card-body">
            <div class="mb-7 pb-1">
              <div class="d-flex justify-content-between align-items-center mb-6">
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">MaterialPro</h6>
                  <p class="fs-3 mb-0">$23,568</p>
                </div>
                <div>
                  <span class="badge bg-light-primary text-primary fw-semibold fs-3">55%</span>
                </div>
              </div>
              <div class="progress bg-light-primary" style="height: 4px;">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                  aria-valuemax="100">
                </div>
              </div>
            </div>
            <div>
              <div class="d-flex justify-content-between align-items-center mb-6">
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">Flexy Admin</h6>
                  <p class="fs-3 mb-0">$23,568</p>
                </div>
                <div>
                  <span class="badge bg-light-secondary text-secondary fw-bold fs-3">20%</span>
                </div>
              </div>
              <div class="progress bg-light-secondary" style="height: 4px;">
                <div class="progress-bar bg-secondary w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Row 2 -->
  <!--  Row 3 -->
  <div class="row">
    <!-- Weekly Stats -->
    <div class="col-lg-4 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <h5 class="card-title fw-semibold">Produksi Budidaya Ikan</h5>
          <p class="card-subtitle mb-0">============</p>
          <div id="stats" class="my-4"></div>
          <div class="position-relative">
            <div class="d-flex align-items-center justify-content-between mb-7">
              <div class="d-flex">
                <div class="p-6 bg-light-primary rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-primary fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">PUD</h6>
                  <p class="fs-3 mb-0">Perairan Umum Darat</p>
                </div>
              </div>
              <div class="bg-light-primary badge">
                <p class="fs-3 text-primary fw-semibold mb-0"><?= $jmlh_pud; ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-7">
              <div class="d-flex">
                <div class="p-6 bg-light-success rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-success fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">KAT</h6>
                  <p class="fs-3 mb-0">Kolam Air Tenang</p>
                </div>
              </div>
              <div class="bg-light-success badge">
                <p class="fs-3 text-success fw-semibold mb-0"><?= $jmlh_kat; ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex">
                <div class="p-6 bg-light-danger rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-danger fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">KJT T</h6>
                  <p class="fs-3 mb-0">Jaring Tancap Tawar</p>
                </div>
              </div>
              <div class="bg-light-danger badge">
                <p class="fs-3 text-danger fw-semibold mb-0"><?= $jmlh_kjtt; ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-7"></div>
            <div class="d-flex align-items-center justify-content-between mb-7">
              <div class="d-flex">
                <div class="p-6 bg-light-primary rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-primary fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">KJA T</h6>
                  <p class="fs-3 mb-0">Jaring Apung Tawar</p>
                </div>
              </div>
              <div class="bg-light-primary badge">
                <p class="fs-3 text-primary fw-semibold mb-0"><?= $jmlh_kjat; ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-7">
              <div class="d-flex">
                <div class="p-6 bg-light-success rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-success fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">MNP</h6>
                  <p class="fs-3 mb-0">Mina Padi</p>
                </div>
              </div>
              <div class="bg-light-success badge">
                <p class="fs-3 text-success fw-semibold mb-0"><?= $jmlh_mnp; ?></p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex">
                <div class="p-6 bg-light-danger rounded me-6 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-danger fs-6"></i>
                </div>
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">KJA L</h6>
                  <p class="fs-3 mb-0">Jaring Apung Laut</p>
                </div>
              </div>
              <div class="bg-light-danger badge">
                <p class="fs-3 text-danger fw-semibold mb-0"><?= $jmlh_kjal; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Performers -->
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Top Performers</h5>
              <p class="card-subtitle mb-0">Best Employees</p>
            </div>
            <div>
              <select class="form-select">
                <option value="1">March 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-middle text-nowrap mb-0">
              <thead>
                <tr class="text-muted fw-semibold">
                  <th scope="col" class="ps-0">Assigned</th>
                  <th scope="col">Project</th>
                  <th scope="col">Priority</th>
                  <th scope="col">Budget</th>
                </tr>
              </thead>
              <tbody class="border-top">
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url('assets/keren/'); ?>dist/images/profile/user-1.jpg"
                          class="rounded-circle" width="40" height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                        <p class="fs-2 mb-0 text-muted">Web Designer</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Elite Admin</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-primary text-primary">Low</span>
                  </td>
                  <td>
                    <p class="fs-3 text-dark mb-0">$3.9K</p>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url('assets/keren/'); ?>dist/images/profile/user-2.jpg"
                          class="rounded-circle" width="40" height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">John Deo</h6>
                        <p class="fs-2 mb-0 text-muted"> Web Developer </p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Flexy Admin</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">Medium</span>
                  </td>
                  <td>
                    <p class="fs-3 text-dark mb-0">$24.5K</p>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url('assets/keren/'); ?>dist/images/profile/user-3.jpg"
                          class="rounded-circle" width="40" height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                        <p class="fs-2 mb-0 text-muted">Web Manager</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Material Pro</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-info text-info">High</span>
                  </td>
                  <td>
                    <p class="fs-3 text-dark mb-0">$12.8K</p>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url('assets/keren/'); ?>dist/images/profile/user-4.jpg"
                          class="rounded-circle" width="40" height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                        <p class="fs-2 mb-0 text-muted"> Project Manager </p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Xtreme Admin</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-success text-success">Low</span>
                  </td>
                  <td>
                    <p class="fs-3 text-dark mb-0">$4.8K</p>
                  </td>
                </tr>
                <tr>
                  <td class="border-0 ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url('assets/keren/'); ?>dist/images/profile/user-5.jpg"
                          class="rounded-circle" width="40" height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                        <p class="fs-2 mb-0 text-muted"> Content Writer </p>
                      </div>
                    </div>
                  </td>
                  <td class="border-0">
                    <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                  </td>
                  <td class="border-0">
                    <span class="badge fw-semibold py-1 w-85 bg-light-danger text-danger">High</span>
                  </td>
                  <td class="border-0">
                    <p class="fs-3 text-dark mb-0">$9.3K</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<!--  Shopping Cart -->

<!--  Mobilenavbar -->


<!--  Search Bar -->