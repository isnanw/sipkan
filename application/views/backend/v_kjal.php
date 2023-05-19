<?php $this->load->view("backend/_partials/breadcrumb.php") ?>
<!-- Post Datatables -->

<section id="input-validation">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="btn-group mb-3  float-end" role="group" aria-label="Basic example">
                        <a href="<?= base_url('backend/Kjal/v_input') ?>" class="btn icon btn-sm btn-success" id="btn-input"><i class="ti ti-square-plus"></i></a>
                    </div>
                    <br /><br />
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordered mb-0 text-sm">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-9">Kab/Kota</th>
                                    <th class="col-2">Kampung</th>
                                    <th class="col-2">Ketua</th>
                                    <th class="col-2">Jumlah Anggota</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Post Datatables END -->


<!-- </div>
</div> -->

<!------- TOASTIFY JS --------->
<?php $this->load->view("backend/_partials/toastify.php") ?>
<?php $this->load->view("backend/_partials/templatejs") ?>



<!------- TOASTIFY JS --------->


<script type="application/javascript">
    var save_method;
    var table;
    var csfrData = {};

    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
                                                                            $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
        data: csfrData
    });

    $(document).ready(function() {
        //datatables
        table = $('#mytable').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            //"searching": false,
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('backend/Kjal/get_ajax_list') ?>",
                "type": "POST",
                "data": function(data) {},
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                    "width": "10%",
                    "targets": 0
                },
                {
                    "width": "25%",
                    "targets": 1
                },
                {
                    "width": "20%",
                    "targets": 2
                },
                {
                    "width": "20%",
                    "targets": 3
                },
                {
                    "width": "20%",
                    "targets": 4
                },
                {
                    "width": "10%",
                    "targets": 5
                },
                {
                    "orderable": true,
                    "targets": [0, 1, 2, 3, 4, 5]
                }
            ],
        });
    });

    function reload_table() {
        table.ajax.reload(null, false);
    }
    $(document).on("click", "#deletets", function(e) {
        e.preventDefault();

        var id = $(this).attr("value");

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
                    url: "<?php echo site_url('backend/Kjal/deletets') ?>",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(response) {
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
</script>

</body>

</html>