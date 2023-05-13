  <!--  Customizer -->
  <!--  Import Js Files -->
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--  core files -->
  <script src="<?= base_url('assets/keren/'); ?>dist/js/app.min.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/js/app.init.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/js/app-style-switcher.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/js/sidebarmenu.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/js/custom.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/prismjs/prism.js"></script>
  <!--  current page js files -->
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <!-- <script src="<?= base_url('assets/keren/'); ?>dist/libs/apexcharts/dist/apexcharts.min.js"></script> -->
  <script src="<?= base_url('assets/keren/'); ?>dist/js/dashboard.js"></script>
  <!-- datatables -->
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/js/datatable/datatable-basic.init.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="<?= base_url('assets/keren/'); ?>dist/libs/jquery-validation/dist/jquery.validate.min.js"></script>
  <!-- <script src="<?= base_url('assets/keren/'); ?>dist/js/forms/form-wizard.js"></script> -->

  <script language="JavaScript" type="application/javascript" src="<?php echo base_url() . 'assets/extensions/toastify-js/src/toastify.js' ?>"></script>
  <script language="JavaScript" type="application/javascript" src="<?php echo base_url() . 'assets/js/pages/toastifycrud.js' ?>"></script>
  <script language="JavaScript" type="application/javascript" src="<?php echo base_url() . 'assets/extensions/sweetalert2/sweetalert2.min.js' ?>"></script>
  <script src="<?= base_url('assets/'); ?>select2/js/select2.full.min.js"></script>

  <?php
  if (!empty($this->session->flashdata('message'))) {
    $pesan = $this->session->flashdata('message');
    if ($pesan == "success") {
      $script = "
                    <script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Data',
                              text: 'Data Berhasil Ditambah'
                            }) 
                    </script>
                ";
    } elseif ($pesan == "successedit") {
      $script =
        "
                    <script>
                          Swal.fire({
                            icon: 'success',
                            title: 'Data',
                            text: 'Data Berhasil Di Edit'
                          }) 
                    </script>
        ";
    } else {
      $script =
        "
                    <script>
                                Swal.fire({
                                  icon: 'error',
                                  title: 'Data',
                                  text: 'Gagal'
                                }) 

                    </script>
                    ";
    }
  } else {
    $script = "";
  }
  echo $script;
  ?>