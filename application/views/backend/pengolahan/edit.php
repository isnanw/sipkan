<?php $this->load->view("backend/_partials/breadcrumb") ?>
<!-- Post Datatables -->

<div class="row">
    <div class="col-12">
        <div class="form-with-tabs">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Form Update Data</h4>
                </div>

                <div class="card-body p-4">
                    <?php echo form_open('backend/pengolahan/edit'); ?>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-data" role="tabpanel"
                            aria-labelledby="pills-data" tabindex="0">
                            <div class="row">
                                <section>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-4">
                                            <input type="hidden" id="idedit" name="idedit" class="form-control border border-info" value="<?= $this->uri->segment(4); ?>"
                                                required />
                                            <label class="control-label">Kab/Kota</label>
                                            <select class="form-control border border-info" id="kab" name="kab" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <label class="control-label">Distrik</label>
                                            <select class="form-control border border-info" id="distrik" name="distrik" required>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label">Kampung</label>
                                            <select class="form-control border border-info" id="kampung" name="kampung" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-6">
                                            <label class="control-label">Nama Kelompok</label>
                                            <input type="text" id="nama_kelompok" name="nama_kelompok"
                                                class="form-control border border-info" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Jenis Hasil Produksi</label>
                                            <select class="form-control border border-info" id="jenis_hasil_produksi"
                                                name="jenis_hasil_produksi" required>
                                            </select>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row pt-3 mb-3">
                                        <!-- <h5 class="mb-2">Data</h5> -->
                                        <div class="col-md-12">
                                            <label class="control-label">Keterangan</label>
                                            <textarea style="height: 100px;" id="keterangan" name="keterangan"
                                                class="form-control border border-info" required></textarea>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <button type="submit"
                                                    class="btn btn-success font-medium rounded-pill px-4 btnSave"
                                                    id="btnSave">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ti ti-send me-2 fs-4"></i>
                                                        Submit
                                                    </div>
                                                </button>
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <a href="<?= base_url('backend/pengolahan') ?>" class="btn btn-danger font-medium rounded-pill px-4">
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
    $(document).ready(function () {
        $("#kab").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatakab',
                    type: "post",
                    dataType: 'json',
                    delay: 200,
                    data: function (params) {
                        return {
                            searchTerm: params.term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });

            var idedit = $('#idedit').val();
            $('#kab').select2();
            $('#distrik').select2();
            $('#kampung').select2();
            $('#jenis_hasil_produksi').select2();
            $.ajax({
            url: '<?= site_url() ?>backend/pengolahan/ajax_edit/' + idedit,
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    var $hasilkab = $("<option selected='selected'></option>").val(data.kodekabupaten).text(data.kabupaten)
                    $("#kab").append($hasilkab).trigger('change');

                    var $hasildistrik = $("<option selected='selected'></option>").val(data.kodedistrik).text(data.distrik)
                    $("#distrik").append($hasildistrik).trigger('change');

                    var $hasilkampung = $("<option selected='selected'></option>").val(data.kodekampung).text(data.kampung)
                    $("#kampung").append($hasilkampung).trigger('change');

                    $('#nama_kelompok').val(data.nama_kelompok);

                    var $jenis_hasil_produksi = $("<option selected='selected'></option>").val(data.jenis_hasil_produksi).text(data.namajenishasilproduksi)
                    $("#jenis_hasil_produksi").append($jenis_hasil_produksi).trigger('change');

                    $('#keterangan').val(data.keterangan);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });


        $("#jenis_hasil_produksi").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jenishasilproduksi/getproduksi',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function (params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function (response) {
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
                data: function (params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
        $("#jabatan").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Jenisikan/getdataikan',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function (params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
    $("#kab").change(function () {
        $('#distrik').val('');
        var kodelokasi = $("#kab").val();
        $("#distrik").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatadistrik/' + kodelokasi,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function (params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
    $("#distrik").change(function () {
        $('#kampung').val('');
        var kodelokasi = $("#distrik").val();
        $("#kampung").select2({
            ajax: {
                url: '<?= site_url() ?>backend/Lokasi/getdatakampung/' + kodelokasi,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function (params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function (response) {
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