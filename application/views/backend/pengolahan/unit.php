<?php $this->load->view("backend/_partials/breadcrumb.php") ?>

<div class="row">
  <div class="col-12">
    <!-- ---------------------
        start Employee Profile
    ---------------- -->
    <div class="card">
      <div class="card-body">
        <div class="mb-2">
          <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
            <li class="nav-item">
              <h5 class="mb-0">Dasar Unit Pengolahan Ikan (UPI)</h5>
            </li>
            <li class="nav-item ms-auto">
              <a href="<?= base_url('backend/pengolahan/unit_edit/') . $this->uri->segment(4) . '?idkelompok=' . $_GET['idkelompok']; ?>"
                class="btn btn-primary d-flex align-items-center px-3">
                <i class="ti ti-pencil fs-4"></i>
                <span class="d-none d-md-block font-weight-medium fs-3">Update Data</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center gap-4 mb-3">
          <div class="d-flex align-items-center fs-5"></i>Kelompok : <?= $kelompok->nama_kelompok;?></div>
          <div class="d-flex align-items-center fs-5 ms-auto"></i>Anggota : <?= $anggota->nama_anggota; ?></div>
        </div>


        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button style="background-color: skyblue;" class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                <b>#Informasi</b>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <!-- start row -->
                      <tr>

                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Nama Unit Pengolahan Ikan
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Entitas UPI
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Nama Pemilik
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Penanggung Jawab
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Modal Usaha
                          <br><span><small>Tidak Termasuk Tanah dan Bangunan Tempat Usaha</small></span>
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Omzet Tahunan UPI
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Nomor Kontak Person
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Tahun Berdiri UPI
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Provinsi
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Kabupaten/Kota
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Kecamatan
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Kelurahan/Desa
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Alamat
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Kode Pos
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          NIB
                          <br><span><small>(Nomor Induk Berusaha)</small> Berbasis Reski</span>
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          KBLI yang Digunakan
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No MPWP
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No IUP Bidang Pengolahan Ikan
                          <br><span><small>(SS Berbasis Resiko)</small></span>
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No SKP/GMP
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No HACCP
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No SIUP
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          No Akte Pendiri Usah
                        </th>
                        <td>?</td>
                      </tr>
                      <tr>
                        <th class="text-nowrap col-3" scope="row">
                          Email
                        </th>
                        <td>?</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                <b>#Kelompok Produk</b>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Nama Produk
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Teknologi Produk Yang Digunakan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Tujian Pemasaran Domestik
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Tujuan Pemasaran Mancanegara
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Total Realisasi Produksi Pertahun

                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                aria-controls="collapseThree">
                <b>#Kelompok Bahan Baku</b>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Asal Wilayah
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jenis Ikan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Bentuk Ikan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Kebutuhan Perhari (Kg)
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        SNI yang Diterapkan
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <b>#Kelompok Kapasitas dan Prasarana</b>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jumlah Unit
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jumlah Kapasitas
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <b>#Kelompok Tenaga Kerja</b>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Tenaga Kerja Asing
                      </th>
                      <td>Laki-laki:</td>
                      <td>Perempuan:</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Tenaga Kerja Tetap
                      </th>
                      <td>Laki-laki:</td>
                      <td>Perempuan:</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Tenaga Kerja Harian
                      </th>
                      <td>Laki-laki:</td>
                      <td>Perempuan:</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jumlah Hari Kerja Perbulan
                      </th>
                      <td colspan="2">?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jumlah Shif Perhari
                      </th>
                      <td colspan="2">?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <b>#Kelompok Penanggung Jawab</b>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        UPI
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Produksi
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Mutu (QC/QA)
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <b>#Kelompok Air Bersih</b>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Sumber
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Pengolahan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Volume
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading9">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                <b>#Kelompok Es Untuk Pengolahan</b>
              </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Produksi Sendiri
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Pembelian Dari
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Bentuk Es
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Penggunaan Es
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
              <button style="background-color: skyblue;" class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <b>#Kelompok Informasi Lainnya</b>
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>

                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Bahan Tambahan Pangan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Bahan Kimia Yang Digunakan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Bahan Lainnya
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Jenis Bahan Kemasan
                      </th>
                      <td>?</td>
                    </tr>
                    <tr>
                      <th class="text-nowrap col-3" scope="row">
                        Informasi Lainnya
                      </th>
                      <td>?</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------
        end Employee Profile
    ---------------- -->
  </div>
</div>
<!-- End Row -->


<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify.php") ?>
<?php $this->load->view("backend/_partials/templatejs") ?>



<!------- TOASTIFY JS --------->


</body>

</html>