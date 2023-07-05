<?php $this->load->view("backend/_partials/breadcrumb") ?>
<!-- Post Datatables -->

<div class="row">
    <div class="col-12">
        <div class="form-with-tabs">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Form Input</h4>
                </div>

                <div class="card-body p-4">
                    <?php echo form_open('backend/pembesaran/add'); ?>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-data" role="tabpanel" aria-labelledby="pills-data" tabindex="0">
                            <div class="row">
                                <section>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-6">
                                            <label class="control-label">Kab/Kota</label>
                                            <select class="form-control border border-info" id="kab" name="kab" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <label class="control-label">Periode (Bulan)</label>
                                            <select class="form-control border border-info" id="periode" name="periode" required>
                                            </select>
                                            <input type="number" id="tahun" name="tahun" class="form-control border border-info" hidden required value="<?= $tahun; ?>" />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-6">
                                            <label class="control-label">Jenis Budidaya</label>
                                            <select class="form-control border border-info" id="budidaya" name="budidaya" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <label class="control-label">Jenis Ikan</label>
                                            <select class="form-control border border-info" id="ikan" name="ikan" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                       <div class="col-md-6">
                                            <label class="control-label">Produksi (Ekor)</label>
                                            <input type="number" id="produksi" name="produksi" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                       <div class="col-md-6">
                                            <label class="control-label">Harga/Ekor</label>
                                            <input type="number" id="harga" name="harga" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                       <div class="col-md-6">
                                            <label class="control-label">Nilai Produksi (Pro*Hrg)</label>
                                            <input type="number" id="nilaiproduksi" name="nilaiproduksi" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                       <div class="col-md-6">
                                            <label class="control-label">Luas Lahan (Ha) Produksi</label>
                                            <input type="number" id="luaslahan" name="luaslahan" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-6">
                                            <label class="control-label">Luas Wadah Pemeliharaan (M²) yang aktif Produksi</label>
                                            <input type="number" id="luaswadah" name="luaswadah" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <label class="control-label">Jumlah (RTP) Pembudidaya</label>
                                            <input type="number" id="rtp" name="rtp" class="form-control border border-info" required />
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                            <button type="submit" class="btn btn-success font-medium rounded-pill px-4 btnSave" id="btnSave">
                                                <div class="d-flex align-items-center">
                                                    <i class="ti ti-send me-2 fs-4"></i>
                                                    Submit
                                                </div>
                                            </button>
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('backend/pembesaran') ?>" class="btn btn-danger font-medium rounded-pill px-4">
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
        $("#periode").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jeniskomoditas/getdataperiode',
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
        $("#budidaya").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jenisbudidaya/getdatabudidaya',
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
        $("#ikan").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jenisikan/getdataikan',
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