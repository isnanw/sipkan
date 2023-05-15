<?php $this->load->view("backend/_partials/breadcrumb") ?>
<!-- Post Datatables -->

<div class="row">
    <div class="col-12">
        <div class="form-with-tabs">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Form Edit</h4>
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
                    <?php echo form_open('backend/ts/edit'); ?>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-data" role="tabpanel" aria-labelledby="pills-data" tabindex="0">
                            <div class="row">
                                <section>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Data</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Kab/Kota</label>
                                            <select class="form-control" id="kab" name="kab" required>
                                            </select>
                                            <input type="hidden" id="id_ts" name="id_ts" class="form-control" value="<?= $id_ts; ?>" required />
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <label class="control-label">Distrik</label>
                                            <select class="form-control" id="distrik" name="distrik" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">RTP</h5>
                                        <div class="col-md-12">
                                            <label class="control-label">Kampung</label>
                                            <select class="form-control" id="kampung" name="kampung" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row pt-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="control-label">Ketua</label>
                                            <input type="text" id="ketua" name="ketua" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah Anggota</label>
                                            <input type="number" id="jml_anggota" name="jml_anggota" class="form-control" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Tambak Sederhana</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah Tambak</label>
                                            <input type="number" id="jml_tambak" name="jml_tambak" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Ukuran Tambak</label>
                                            <input type="number" id="uk_tambak" name="uk_tambak" class="form-control" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Luas Lahan(M<sup>2</sup>)</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Potensi (M<sup>2</sup>)</label>
                                            <input type="number" id="potensi" name="potensi" class="form-control" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Existing (M<sup>2</sup>)</label>
                                            <input type="number" id="existing" name="existing" class="form-control" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <h5 class="mb-2">Komoditas</h5>
                                        <div class="col-md-6">
                                            <label class="control-label">Jenis</label>
                                            <select class="form-control" id="komoditas" name="komoditas" required>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah (Ekor)</label>
                                            <input type="number" id="jml_ekor" name="jml_ekor" class="form-control" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('Backend/Ts') ?>" class="btn btn-danger font-medium rounded-pill px-4">
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
                                                    <th class="col-2"> <input type="number" class="form-control" id="jan" name="jan" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">2</th>
                                                    <th class="col-9">Februari</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="feb" name="feb" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">3</th>
                                                    <th class="col-9">Maret</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="mar" name="mar" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">4</th>
                                                    <th class="col-9">April</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="apr" name="apr" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">5</th>
                                                    <th class="col-9">Mei</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="mei" name="mei" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">6</th>
                                                    <th class="col-9">Juni</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="jun" name="jun" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">7</th>
                                                    <th class="col-9">Juli</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="jul" name="jul" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">8</th>
                                                    <th class="col-9">Agustus</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="agu" name="agu" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">9</th>
                                                    <th class="col-9">September</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="sep" name="sep" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">10</th>
                                                    <th class="col-9">Oktober</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="okt" name="okt" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">11</th>
                                                    <th class="col-9">November</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="nov" name="nov" /> </th>
                                                </tr>
                                                <tr>
                                                    <th class="col-1">12</th>
                                                    <th class="col-9">Desember</th>
                                                    <th class="col-2"> <input type="number" class="form-control" id="des" name="des" /> </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('Backend/Ts') ?>" class="btn btn-danger font-medium rounded-pill px-4">
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
        var id_ts = $('#id_ts').val();
        $('#kab').select2();
        $('#distrik').select2();
        $('#kampung').select2();
        $('#komoditas').select2();
        $.ajax({
            url: '<?= site_url() ?>backend/ts/ajax_edit/' + id_ts,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var $hasilkab = $("<option selected='selected'></option>").val(data.kodelokasi).text(data.lokasi)
                $("#kab").append($hasilkab).trigger('change');

                var $hasildistrik = $("<option selected='selected'></option>").val(data.kodedistrik).text(data.distrik)
                $("#distrik").append($hasildistrik).trigger('change');

                var $hasilkampung = $("<option selected='selected'></option>").val(data.kodekampung).text(data.kampung)
                $("#kampung").append($hasilkampung).trigger('change');

                var $hasilkomoditas = $("<option selected='selected'></option>").val(data.jenis_komoditas).text(data.namajeniskomoditas)
                $("#komoditas").append($hasilkomoditas).trigger('change');

                $('#ketua').val(data.ketua);
                $('#jml_anggota').val(data.jml_anggota);
                $('#jml_tambak').val(data.jml_tambak);
                $('#uk_tambak').val(data.uk_tambak);
                $('#potensi').val(data.potensi);
                $('#existing').val(data.existing);
                $('#jml_ekor').val(data.jml_ekor);

                $('#jan').val(data.jan);
                $('#feb').val(data.feb);
                $('#mar').val(data.mar);
                $('#apr').val(data.apr);
                $('#mei').val(data.mei);
                $('#jun').val(data.jun);
                $('#jul').val(data.jul);
                $('#agu').val(data.agu);
                $('#sep').val(data.sep);
                $('#okt').val(data.okt);
                $('#nov').val(data.nov);
                $('#des').val(data.des);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    });
    $("#kab").change(function() {
        $('#distrik').val('');
        var kodelokasi = $("#kab").val();
        $("#distrik").select2({
            ajax: {
                url: '<?= site_url() ?>backend/lokasi/getdatadistrik/' + kodelokasi,
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
                url: '<?= site_url() ?>backend/jeniskomoditas/getdatakomoditas',
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
                url: '<?= site_url() ?>backend/lokasi/getdatakampung/' + kodelokasi,
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