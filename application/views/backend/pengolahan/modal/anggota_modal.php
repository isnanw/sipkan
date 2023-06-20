<!-- MODAL -->
<!-- Add Records Modal -->
<div class="modal fade text-left" id="modal_form_anggota" tabindex="-1" jeniskolam="dialog"
    aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" jeniskolam="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title white" id="myModalLabel120"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body formanggota">
                <?php
                $attributes = array('class' => 'form-horizontal', 'id' => 'formanggota');
                echo form_open($this->uri->uri_string(), $attributes);
                ?>
                <div class="form-body">
                    <div class="row">
                        <input type="hidden" name="id" class="id" />
                        <input type="hidden" name="id_kelompok" class="id_kelompok"
                            value="<?= $this->uri->segment(4); ?>" />
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label for="valid-state">Anggota</label>
                                <input type="text" name="nama_anggota" class="form-control nama_anggota"
                                    id="nama_anggota" placeholder="Nama Anggota">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="mb-3"></div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label for="valid-state">Jabatan</label>
                                <input type="text" name="jabatan_anggota" class="form-control jabatan_anggota"
                                    id="jabatan_anggota" placeholder="jabatan anggota">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
            <div class="modal-footer">
                <div class="show_record"></div>
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-sm-none"></i>Cancel</button>
                <button type="submit" class="btn btn-success ml-1 btnSave" id="btnSave" onclick="addanggota()">
                    <i class="bx bx-check d-sm-none"></i>Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Records Modal -->


<!-- END MODAL -->