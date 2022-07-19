<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" id="form_proses" action="<?php echo base_url('admin/pengaduan/konfirmasi'); ?>">
                        <!-- <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ID Proses</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_proses" id="id_proses" class="form-control-plaintext" value="<?= $id ?>">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Tiket</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?php echo $detail->no_tiket ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggapan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?php echo $detail->tgl_proses ?>">
                                <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?php echo $detail->keterangan ?>">
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>