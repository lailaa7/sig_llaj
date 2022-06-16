<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <h4 class="card-title">Proses Pengaduan Anda</h4>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No Tiket</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?= $pengaduan->no_tiket ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Proses Pengaduan</label>
                                    <div class="col-sm-9">
                                        <img src="<?php echo base_url() . './lampiran/' . $pengaduan->proses1 ?> " height="300" width="270">
                                    </div>
                                    <div class="col-sm-9">
                                        <img src="">
                                    </div>
                                    <div class="col-sm-9">
                                        <img src="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>