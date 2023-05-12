<?php $this->load->view("backend/_partials/breadcrumb.php") ?>
<!-- Post Datatables -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title mb-0">Form Input</h4>
                <h6 class="card-subtitle mb-3"></h6>
                <form action="#" class="tab-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Data</h6>
                    <section>
                        <div class="row pt-3 mb-3">
                            <div class="col-md-6">
                                <label class="control-label">Kab/Kota</label>
                                <input type="text" id="firstName" class="form-control" />
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <label class="control-label">Distrik</label>
                                <input type="text" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row pt-3 mb-3">
                            <h5 class="mb-2">RTP</h5>
                            <div class="col-md-12">
                                <label class="control-label">Kampung</label>
                                <input type="text" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row pt-3 mb-3">
                            <div class="col-md-6">
                                <label class="control-label">Ketua</label>
                                <input type="text" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Jumlah Anggota</label>
                                <input type="number" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3 mb-3">
                            <h5 class="mb-2">Luas Lahan(M<sup>2</sup>)</h5>
                            <div class="col-md-6">
                                <label class="control-label">Potensi (M<sup>2</sup>)</label>
                                <input type="number" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Existing (M<sup>2</sup>)</label>
                                <input type="number" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row pt-3 mb-3">
                            <h5 class="mb-2">Komoditas</h5>
                            <div class="col-md-6">
                                <label class="control-label">Jenis</label>
                                <input type="number" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Jumlah (Ekor)</label>
                                <input type="number" id="lastName" class="form-control form-control-danger" />
                            </div>
                            <!--/span-->
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>Produksi Panen</h6>
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
                                        <th class="col-2"> <input type="number" class="form-control" id="1" name="1" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">2</th>
                                        <th class="col-9">Februari</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="2" name="2" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">3</th>
                                        <th class="col-9">Maret</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="3" name="3" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">4</th>
                                        <th class="col-9">April</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="4" name="4" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">5</th>
                                        <th class="col-9">Mei</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="5" name="5" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">6</th>
                                        <th class="col-9">Juni</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="6" name="6" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">7</th>
                                        <th class="col-9">Juli</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="7" name="7" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">8</th>
                                        <th class="col-9">Agustus</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="8" name="8" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">9</th>
                                        <th class="col-9">September</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="9" name="9" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">10</th>
                                        <th class="col-9">Oktober</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="10" name="10" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">11</th>
                                        <th class="col-9">November</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="11" name="11" /> </th>
                                    </tr>
                                    <tr>
                                        <th class="col-1">12</th>
                                        <th class="col-9">Desember</th>
                                        <th class="col-2"> <input type="number" class="form-control" id="12" name="12" /> </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </form>
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
<?php $this->load->view("backend/_partials/toastify.php") ?>
<?php $this->load->view("backend/_partials/templatejs.php") ?>