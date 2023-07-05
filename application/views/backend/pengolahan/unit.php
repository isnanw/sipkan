<?php $this->load->view("backend/_partials/breadcrumb.php") ?>

<div class="row">
  <div class="col-12">
    <!-- ---------------------
                                    start Employee Profile
                                ---------------- -->
    <div class="card">
      <div class="card-body">
        <h5>Detail</h5>
        <p class="card-subtitle mb-0">
          Unit Pengolahan Ikan (UPI)
        </p>
      </div>
      <form class="form-horizontal r-separator">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="namaunit" class="col-sm-3 text-end control-label col-form-label">Nama Unit </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" id="namaunit" name="namaunit"
                    placeholder="Nama Unit" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="entitas" class="col-sm-3 text-end control-label col-form-label">Entitas UPI</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" id="entitas" name="entitas"
                    placeholder="Last Name Here" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="namapemilik" class="col-sm-3 text-end control-label col-form-label">Nama Pemilik</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control border border-info" name="namapemilik" id="namapemilik"
                    placeholder="Nama Pemilik" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="penanggungajwab" class="col-sm-3 text-end control-label col-form-label">P.
                  Jawab</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="penanggungajwab" id="penanggungajwab"
                    placeholder="Penanggung Jawab" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="namapemilik" class="col-sm-3 text-end control-label col-form-label">Modal Usaha</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control border border-info" name="namapemilik" id="namapemilik"
                    placeholder="Modal Usaha" />
                </div>
                <!-- <small style="color:blue">*Tidak termasuk tanah dan bangunan tempat usaha</small> -->
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="omzet" class="col-sm-3 text-end control-label col-form-label">Omzet Tahunan</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control border border-info" name="omzet" id="omzet"
                    placeholder="Omzet Tahunan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="tahunberdiri" class="col-sm-3 text-end control-label col-form-label">Tahun Berdiri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="tahunberdiri" id="tahunberdiri"
                    placeholder="Tahun Berdiri" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kontakperson" class="col-sm-3 text-end control-label col-form-label">Kontak Person</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control border border-info" name="kontakperson" id="kontakperson"
                    placeholder="Kontak Person" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="provinsi" class="col-sm-3 text-end control-label col-form-label">Provinsi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="tahunberdiri" id="tahunberdiri"
                    placeholder="Tahun Berdiri" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kabupaten" class="col-sm-3 text-end control-label col-form-label">Kabupaten</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control border border-info" name="kontakperson" id="kontakperson"
                    placeholder="Kontak Person" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="Kecamatan" class="col-sm-3 text-end control-label col-form-label">Kecamatan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="tahunberdiri" id="tahunberdiri"
                    placeholder="Tahun Berdiri" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kelurahan" class="col-sm-3 text-end control-label col-form-label">Kelurahan</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control border border-info" name="kontakperson" id="kontakperson"
                    placeholder="Kontak Person" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="alamat" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <textarea type="text" class="form-control border border-info" name="alamat" id="alamat"
                    placeholder="Alamat"></textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kodepos" class="col-sm-3 text-end control-label col-form-label">Kode Pos</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control border border-info" name="kodepos" id="kodepos"
                    placeholder="Kode Pos" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="nib" class="col-sm-3 text-end control-label col-form-label">NIB</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="nib" id="nib"
                    placeholder="Nomor Induk Berusaha" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kbli" class="col-sm-3 text-end control-label col-form-label">KBLI</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="kbli" id="kbli"
                    placeholder="KBLI yang Sesuai" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="npwp" class="col-sm-3 text-end control-label col-form-label">No NPWP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="npwp" id="npwp" placeholder="NPWP" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="no_iup" class="col-sm-3 text-end control-label col-form-label">No IUP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="no_iup" id="no_iup"
                    placeholder="No IUP Bidang Pengolahan Ikan (SS Berbasis Resiko)" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="skp" class="col-sm-3 text-end control-label col-form-label">No SKP/GMP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="skp" id="skp"
                    placeholder="No SKP/GMP" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="hscpp" class="col-sm-3 text-end control-label col-form-label">No HACCP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="hscpp" id="hscpp"
                    placeholder="No HACCP" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="siup" class="col-sm-3 text-end control-label col-form-label">No SIUP</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="siup" id="siup"
                    placeholder="No SIUP" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="akte" class="col-sm-3 text-end control-label col-form-label">No Akte Pendiri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="akte" id="akte"
                    placeholder="No Akte Pendiri Usaha" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="mail" class="form-control border border-info" name="email" id="email"
                    placeholder="Email@mail.com" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="akte" class="col-sm-3 text-end control-label col-form-label">Dokumen</label>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input success" type="checkbox" id="success-check" value="option1">
                    <label class="form-check-label" for="success-check">KTP</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input success" type="checkbox" id="success-check" value="option1">
                    <label class="form-check-label" for="success-check">Sertifikat SPI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input success" type="checkbox" id="success-check" value="option1">
                    <label class="form-check-label" for="success-check">SPT Pajak</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input success" type="checkbox" id="success-check" value="option1">
                    <label class="form-check-label" for="success-check">Perjanjian Sewa Menyewa</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Produk
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="namaproduk" class="col-sm-3 text-end control-label col-form-label">Nama Produk</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control border border-info" name="namaproduk" id="namaproduk"
                    placeholder="Nama Produk" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="teknologi" class="col-sm-3 text-end control-label col-form-label">Teknologi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="teknologi" id="teknologi"
                    placeholder="Teknologi Produksi Yang Digunakan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="domestik" class="col-sm-3 text-end control-label col-form-label">Domestik</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="domestik" id="domestik"
                    placeholder="Tujuan Pemasaran Domestik" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="mancanegara" class="col-sm-3 text-end control-label col-form-label">Mancanegara</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="mancanegara" id="mancanegara"
                    placeholder="Tujuan Pemasaran Mancanegara" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="realisasi" class="col-sm-3 text-end control-label col-form-label">Total Realisasi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="realisasi" id="realisasi"
                    placeholder="Total Realisasi Produksi Pertahun" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Bahan Baku
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="asalwilayah" class="col-sm-3 text-end control-label col-form-label">Asal Wilayah</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="asalwilayah" id="asalwilayah"
                    placeholder="Asal Wilayah" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jenisikan" class="col-sm-3 text-end control-label col-form-label">Jenis Ikan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jenisikan" id="jenisikan"
                    placeholder="Jenis Ikan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="bentukikan" class="col-sm-3 text-end control-label col-form-label">Bentuk Ikan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="bentukikan" id="bentukikan"
                    placeholder="Bentuk Ikan" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="kebutuhan" class="col-sm-3 text-end control-label col-form-label">Kebutuhan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="kebutuhan" id="kebutuhan"
                    placeholder="Kebutuhan Perhari (Kg)" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row pt-3">
                <label for="sni" class="col-sm-3 text-end control-label col-form-label">SNI </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="sni" id="sni"
                    placeholder="SNI yang Diterapkan" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Kapasitas Sarana dan Prasarana
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="jenisunit" class="col-sm-3 text-end control-label col-form-label">Jenis Unit</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jenisunit" id="jenisunit"
                    placeholder="Jenis Unit" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jumlahkapasitas" class="col-sm-3 text-end control-label col-form-label">Jumlah
                  Kapasitas</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jumlahkapasitas" id="jumlahkapasitas"
                    placeholder="Jumlah Kapasitas" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Tenaga Kerja
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jenisunit" class="col-sm-12 control-label col-form-label">Tenaga Kerja Asing</label>
                <label for="tenagakerjaasing_laki"
                  class="col-sm-3 text-end control-label col-form-label">Laki-laki</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjaasing_laki"
                    id="tenagakerjaasing_laki" placeholder="0" />
                </div>
                <label for="tenagakerjaasing_perempuan"
                  class="col-sm-3 text-end control-label col-form-label">Perempuan</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjaasing_perempuan"
                    id="tenagakerjaasing_perempuan" placeholder="0" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jenisunit" class="col-sm-12 control-label col-form-label">Tenaga Kerja Tertap</label>
                <label for="tenagakerjatetap_laki"
                  class="col-sm-3 text-end control-label col-form-label">Laki-laki</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjatetap_laki"
                    id="tenagakerjatetap_laki" placeholder="0" />
                </div>
                <label for="tenagakerjatetap_perempuan"
                  class="col-sm-3 text-end control-label col-form-label">Perempuan</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjatetap_perempuan"
                    id="tenagakerjatetap_perempuan" placeholder="0" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jenisunit" class="col-sm-12 control-label col-form-label">Tenaga Kerja Harian</label>
                <label for="tenagakerjaharian_laki"
                  class="col-sm-3 text-end control-label col-form-label">Laki-laki</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjaharian_laki"
                    id="tenagakerjaharian_laki" placeholder="0" />
                </div>
                <label for="tenagakerjaharian_perempuan"
                  class="col-sm-3 text-end control-label col-form-label">Perempuan</label>
                <div class="col-sm-3">
                  <input type="number" class="form-control border border-info" name="tenagakerjaharian_perempuan"
                    id="tenagakerjaharian_perempuan" placeholder="0" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="jenisunit" class="col-sm-3 text-end control-label col-form-label">Jumlah Hari Kerja
                  Perbulan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jenisunit" id="jenisunit"
                    placeholder="Jenis Unit" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="jumlahkapasitas" class="col-sm-3 text-end control-label col-form-label">Jumlah
                  Shift Perhari</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jumlahkapasitas" id="jumlahkapasitas"
                    placeholder="Jumlah Kapasitas" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Penanggung Jawab
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="upi" class="col-sm-3 text-end control-label col-form-label">UPI</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="upi" id="upi" placeholder="UPI" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="produksi" class="col-sm-3 text-end control-label col-form-label">Produksi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="produksi" id="produksi"
                    placeholder="Produksi" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="mutu" class="col-sm-3 text-end control-label col-form-label">Mutu (QC/QA)</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="mutu" id="mutu"
                    placeholder="Mutu (QC/QA)" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Air Bersih
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="sumber" class="col-sm-3 text-end control-label col-form-label">Sumber</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="sumber" id="sumber"
                    placeholder="Sumber" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="pengolahan" class="col-sm-3 text-end control-label col-form-label">Pengolahan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="pengolahan" id="pengolahan"
                    placeholder="Pengolahan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="volume" class="col-sm-3 text-end control-label col-form-label">Volume</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="volume" id="volume"
                    placeholder="Volume" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Es Untuk Pengolahan
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="produksisendiri" class="col-sm-3 text-end control-label col-form-label">Produksi
                  sendiri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="produksisendiri" id="produksisendiri"
                    placeholder="Produksi sendiri" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="pembeliandari" class="col-sm-3 text-end control-label col-form-label">Pembelian Dari</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="pembeliandari" id="pembeliandari"
                    placeholder="Pembelian Dari" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="bentukes" class="col-sm-3 text-end control-label col-form-label">Bentuk Es</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="bentukes" id="bentukes"
                    placeholder="Bentuk Es" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="penggunaanes" class="col-sm-3 text-end control-label col-form-label">Penggunaan Es</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="penggunaanes" id="penggunaanes"
                    placeholder="Penggunaan Es" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body bg-gray-200">
          <h4 class="card-title mt-2 pb-3">
            Kelompok Informasi Lainnya
          </h4>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="bahantambahanpangan" class="col-sm-3 text-end control-label col-form-label">Bahan Tambahan
                  Pangan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="bahantambahanpangan"
                    id="bahantambahanpangan" placeholder="Bahan Tambahan Pangan" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-3 row">
                <label for="bahankimia" class="col-sm-3 text-end control-label col-form-label">Bahan Kimia</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="bahankimia" id="bahankimia"
                    placeholder="Bahan Kimia Yang Digunakan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="bahanlainnya" class="col-sm-3 text-end control-label col-form-label">Bahan Lainnya</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="bahanlainnya" id="bahanlainnya"
                    placeholder="Bahan Lainnya" />
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="jenisbahankemasan" class="col-sm-3 text-end control-label col-form-label">Jenis Bahan
                  Kemasan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control border border-info" name="jenisbahankemasan"
                    id="jenisbahankemasan" placeholder="Jenis Bahan Kemasan" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="informasilainnya" class="col-sm-3 text-end control-label col-form-label">Informasi
                  Lainnya</label>
                <div class="col-sm-9">
                  <textarea type="text" class="form-control border border-info" name="informasilainnya"
                    id="informasilainnya" placeholder="Informasi Lainnya"></textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <div class="form-group mb-12 row">
                <label for="jenisbahankemasan" class="col-sm-3 text-end control-label col-form-label">Dokumen
                  Mutu*)</label>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input success" type="checkbox" id="success-check" value="option1">
                    <label class="form-check-label" for="success-check">Manual Penerapan GMP/SSOP</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="p-3">
          <div class="form-group text-end">
            <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">
              Save
            </button>
            <button class="btn btn-dark rounded-pill px-4 waves-effect waves-light">
              Cancel
            </button>
          </div>
        </div>
      </form>
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