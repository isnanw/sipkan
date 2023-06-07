<?php $this->load->view("backend/_partials/breadcrumb.php") ?>
<!-- Post Datatables -->

<div class="card">
    <div class="card-body">
        <div class="mb-2">
            <h5 class="mb-0">Table
                <?= $title; ?>
            </h5>
        </div>
        <div class="btn-group mb-3  float-end" role="group" aria-label="Basic example">
            <a class="btn icon btn btn-success" id="btn-validate-import" onclick="add_jenisbudidaya()"><i
                    class="ti ti-square-plus"></i> Tambah Data</a>
        </div>
        <p class="card-subtitle mb-3">=============</p>

        <div class="table-responsive m-t-40">
            <table id="mytable" class="table border display table-bordered table-striped no-wrap">
                <thead>
                    <!-- start row -->
                    <tr>
                        <th class="col-1">No</th>
                        <th class="col-9">Nama Jenis Budidaya</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                    <!-- end row -->
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!-- Post Datatables END -->


<!-- </div>
</div> -->

<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify") ?>
<?php $this->load->view("backend/_partials/templatejs") ?>

<script type="application/javascript">
    var save_method;
    var table;
    var csfrData = {};

    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
           $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
        data: csfrData
    });

    $(document).ready(function () {
        //datatables
        table = $('#mytable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            //"searching": false,
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('backend/jenisbudidaya/get_ajax_list') ?>",
                "type": "POST",
                "data": function (data) { },
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0, 1, 2], //first column
                "orderable": false, //set not orderable
            },],
        });

        $("#namajenisbudidaya").change(function () {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
    });

    function add_jenisbudidaya() {
        save_method = 'add';
        $('#formjenisbudidaya')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.show_record').empty();
        $('.help-block').empty();
        $('#modal_form_jenisbudidaya').modal('show');
        $('.modal-title').text('Tambah Jenis Ikan');
    }

    function edit_jenisbudidaya(id_jenisbudidaya) {
        save_method = 'update';
        $('#formjenisbudidaya')[0].reset();
        $('.form-group').removeClass('has-error');
        $('.help-block').empty();
        $('#modal_form_jenisbudidaya').modal('show');
        $('.modal-title').text('Edit jenisbudidaya');

        $.ajax({
            url: "<?php echo site_url('backend/jenisbudidaya/ajax_edit/') ?>/" + id_jenisbudidaya,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                $('[name="id"]').val(data.id_jenisbudidaya);
                $('[name="namajenisbudidaya"]').val(data.namajenisbudidaya);

                $('#modal_form_jenisbudidaya').modal('hide');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function addjenisbudidaya() {
        $('#btnSave').text('saving...');
        $('#btnSave').attr('disabled', true);
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('backend/jenisbudidaya/add') ?>";
        } else {
            url = "<?php echo site_url('backend/jenisbudidaya/edit') ?>";
        }


        $.ajax({
            url: url,
            type: "POST",
            data: $('#formjenisbudidaya').serialize(),
            dataType: "JSON",
            success: function (data) {

                if (data.status) {
                    toastify_success();
                    $('#modal_form_jenisbudidaya').modal('hide');
                    reload_table();
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error');
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                    }
                }
                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);


            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSave').text('Save');
                $('#btnSave').attr('disabled', false);

            }
        });

    }


    $(document).on("click", "#deletejenisbudidaya", function (e) {
        e.preventDefault();

        var idkon = $(this).attr("value");

        Swal.fire({
            title: "Apakah kamu yakin ingin menghapus Data ini?",
            text: "Data ini akan di hapus secara Permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url('backend/jenisbudidaya/deletejenisbudidaya') ?>",
                    data: {
                        idkon: idkon,
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Deleted!",
                                "Data berhasil dihapus.",
                                "success"
                            );

                            reload_table();
                        }
                    },
                });
            }
        });
    });

    $(document).on("click", "#lock", function (e) {
        e.preventDefault();

        var id_jenisbudidaya = $(this).attr("value");

        Swal.fire({
            title: "Aktif/ Nonaktif Konsumen ini ?",
            text: "Konsumen yang di Nonaktifkan menandakan sudah tidak melakukan Transaksi selama 1 bulan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Proses!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url('backend/konsumen/lock') ?>",
                    data: {
                        id_jenisbudidaya: id_jenisbudidaya,
                    },
                    dataType: "json",
                    success: function (response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Success!",
                                "Proses berhasil dilakukan.",
                                "success"
                            );

                            reload_table();
                        }
                    },
                });
            }
        });
    });
</script>

</body>

</html>