<?php $this->load->view("backend/_partials/breadcrumb.php") ?>
<!-- Post Datatables -->

<div class="card">
    <div class="card-body">
        <div class="mb-2">
            <h5 class="mb-0">Table <?= $title; ?></h5>
        </div>
        <p class="card-subtitle mb-3">Mencangkup Data Distrik dan Kampung di Kabupaten Keerom</p>
        <div class="table-responsive m-t-40">
            <table id="mytable" class="table border display table-bordered table-striped no-wrap">
                <thead>
                    <!-- start row -->
                    <tr>
                        <th class="col-3">Kode Lokasi</th>
                        <th class="col-9">Nama Lokasi</th>
                    </tr>
                    <!-- end row -->
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>


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
            "responsive": true,
            // "scrollX": true,

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            //"searching": false,
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('backend/lokasi/get_ajax_list') ?>",
                "type": "POST",
                "data": function (data) { },
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "width": "10%",
                "targets": [0, 1], //first column
                "orderable": false, //set not orderable
            },],
        });

        $("#lokasi").change(function () {
            $(this).parent().parent().removeClass('help-block text-danger');
            $(this).next().empty();
        });
    });
</script>

</body>

</html>