<?php $this->load->view("backend/_partials/breadcrumb") ?>
<!-- Post Datatables -->

<div class="row">
    <div class="col-12">
        <div class="form-with-tabs">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Form Input</h4>
                </div>
                <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold" id="pills-data-tab" data-bs-toggle="pill" data-bs-target="#pills-data" type="button" role="tab" aria-controls="pills-data" aria-selected="true"> Data </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold" id="pills-tspp-tab" data-bs-toggle="pill" data-bs-target="#pills-tspp" type="button" role="tab" aria-controls="pills-tspp" aria-selected="false"> Produksi Panen </button>
                    </li>
                </ul>
                <div class="card-body p-4">
                    <?php echo form_open('backend/Mnp/add'); ?>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-data" role="tabpanel" aria-labelledby="pills-data" tabindex="0">
                            <div class="row">
                                <section>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Data</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Kab/Kota</label>
                                            <select class="form-control border border-info" id="kab" name="kab" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <label class="control-label">Distrik</label>
                                            <select class="form-control border border-info" id="distrik" name="distrik" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">RTP</h5>
                                        <div class="col-md-12">
                                            <label class="control-label">Kampung</label>
                                            <select class="form-control border border-info" id="kampung" name="kampung" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row pt-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="control-label">Ketua</label>
                                            <input type="text" id="ketua" name="ketua" class="form-control border border-info" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah Anggota</label>
                                            <input type="number" id="jml_anggota" name="jml_anggota" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Kolam Mina Padi</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah Kolam</label>
                                            <input type="number" id="jml_kolam" name="jml_kolam" class="form-control border border-info" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Ukuran Kolam(M<sup>2</sup>)</label>
                                            <div class="row col">
                                                <div class="col-md-3">
                                                    <input type="number" id="uk_kolam1" name="uk_kolam1" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">X</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" id="uk_kolam2" name="uk_kolam2" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">=</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="uk_kolamhasil" name="uk_kolamhasil" class="form-control border border-info" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Luas Lahan(M<sup>2</sup>)</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Potensi (M<sup>2</sup>)</label>
                                            <div class="row col">
                                                <div class="col-md-3">
                                                    <input type="number" id="potensi1" name="potensi1" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">X</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" id="potensi2" name="potensi2" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">=</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="potensihasil" name="potensihasil" class="form-control border border-info" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Existing (M<sup>2</sup>)</label>
                                            <div class="row col">
                                                <div class="col-md-3">
                                                    <input type="number" id="existing1" name="existing1" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">X</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" id="existing2" name="existing2" class="form-control border border-info" required />
                                                </div>
                                                <div class="col-md-1">
                                                    <label class="form-control border border-info" style="border:none; padding-top: 8px;">=</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="existinghasil" name="existinghasil" class="form-control border border-info" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Komoditas</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Jenis</label>
                                            <select class="form-control border border-info" id="komoditas" name="komoditas" required>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah (Ekor)</label>
                                            <input type="number" id="jml_ekor" name="jml_ekor" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('backend/Mnp') ?>" class="btn btn-danger font-medium rounded-pill px-4">
                                                        <div class="d-flex align-items-center">
                                                            Cancel
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-tspp" role="tabpanel" aria-labelledby="pills-tspp" tabindex="0">
                            <div class="row">
                                <section>
                                    <div class="table-responsive">
                                        <table id="mytable" class="table table-bordered mb-0 text-sm">
                                            <thead>
                                                <tr>
                                                    <th class="col-1">No</th>
                                                    <th class="col-9">Bulan</th>
                                                    <th class="col-2">(Kg)/DA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="col-1">1</th>
                                                    <th class="col-9">Januari</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="jan" name="jan" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">2</th>
                                                    <th class="col-9">Februari</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="feb" name="feb" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">3</th>
                                                    <th class="col-9">Maret</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="mar" name="mar" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">4</th>
                                                    <th class="col-9">April</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="apr" name="apr" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">5</th>
                                                    <th class="col-9">Mei</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="mei" name="mei" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">6</th>
                                                    <th class="col-9">Juni</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="jun" name="jun" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">7</th>
                                                    <th class="col-9">Juli</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="jul" name="jul" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">8</th>
                                                    <th class="col-9">Agustus</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="agu" name="agu" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">9</th>
                                                    <th class="col-9">September</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="sep" name="sep" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">10</th>
                                                    <th class="col-9">Oktober</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="okt" name="okt" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">11</th>
                                                    <th class="col-9">November</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="nov" name="nov" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">12</th>
                                                    <th class="col-9">Desember</th>
                                                    <th class="col-2"> <input type="number" class="form-control border border-info" id="des" name="des" /> </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('backend/Mnp') ?>" class="btn btn-danger font-medium rounded-pill px-4">
                                                        <div class="d-flex align-items-center">
                                                            Cancel
                                                        </div>
                                                    </a>
                                                    <button type="submit" class="btn btn-success font-medium rounded-pill px-4 btnSave" id="btnSave">
                                                        <div class="d-flex align-items-center">
                                                            <i class="ti ti-send me-2 fs-4"></i>
                                                            Submit
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------
                                                    end Custom Design Example
                                                ---------------- -->
</div>
</div>
<!-- Post Datatables END -->


<!-- </div>
</div> -->

<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify") ?>
<?php $this->load->view("backend/_partials/templatejs") ?>
<script type="text/javascript">
    var save_method;
    var table;
    var csfrData = {};

    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
                                                                            $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
        data: csfrData
    });
    $(document).ready(function() {
        $("#kab").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatakab',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
        $("#komoditas").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jeniskomoditas/getdatakomoditas',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
        var potensi1 = document.getElementById('potensi1');
        var potensi2 = document.getElementById('potensi2');
        var potensihasil = document.getElementById('potensihasil');

        potensi1.addEventListener('input', hitungPerkalian);
        potensi2.addEventListener('input', hitungPerkalian);

        function hitungPerkalian() {

            var angka1 = parseFloat(potensi1.value.replace(' m2', ''));
            var angka2 = parseFloat(potensi2.value.replace(' m2', ''));

            var hasilPerkalian = angka1 * angka2;

            var hasilakhir = isNaN(hasilPerkalian) ? '' : hasilPerkalian;

            potensihasil.value = hasilakhir + ' M\u00B2';
        }

        var uk_kolam1 = document.getElementById('uk_kolam1');
        var uk_kolam2 = document.getElementById('uk_kolam2');
        var uk_kolamhasil = document.getElementById('uk_kolamhasil');

        uk_kolam1.addEventListener('input', hitungPerkalian_uk_kolam);
        uk_kolam2.addEventListener('input', hitungPerkalian_uk_kolam);

        function hitungPerkalian_uk_kolam() {

            var angka1 = parseFloat(uk_kolam1.value.replace(' m2', ''));
            var angka2 = parseFloat(uk_kolam2.value.replace(' m2', ''));

            var hasilPerkalian = angka1 * angka2;

            var hasilakhir = isNaN(hasilPerkalian) ? '' : hasilPerkalian;

            uk_kolamhasil.value = hasilakhir + ' M\u00B2';
        }

        var existing1 = document.getElementById('existing1');
        var existing2 = document.getElementById('existing2');
        var existinghasil = document.getElementById('existinghasil');

        existing1.addEventListener('input', hitungPerkalianexisting);
        existing2.addEventListener('input', hitungPerkalianexisting);

        function hitungPerkalianexisting() {

            var angka1 = parseFloat(existing1.value.replace(' m2', ''));
            var angka2 = parseFloat(existing2.value.replace(' m2', ''));

            var hasilPerkalian = angka1 * angka2;

            var hasilakhir = isNaN(hasilPerkalian) ? '' : hasilPerkalian;

            existinghasil.value = hasilakhir + ' M\u00B2';
        }
    });
    $("#kab").change(function() {
        $('#distrik').val('');
        var kodelokasi = $("#kab").val();
        $("#distrik").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatadistrik/' + kodelokasi,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
    $("#distrik").change(function() {
        $('#kampung').val('');
        var kodelokasi = $("#distrik").val();
        $("#kampung").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatakampung/' + kodelokasi,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
</script>
</body>

</html>