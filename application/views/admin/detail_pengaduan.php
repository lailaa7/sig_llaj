<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="<?php echo base_url('admin/pengaduan/konfirmasi'); ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Tiket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?php echo $detail->no_tiket ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Pelapor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" value="<?php echo $detail->nama_pengirim ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" value="<?php echo $detail->no_telp ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" value="<?php echo $detail->lokasi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bukti Pengaduan</label>
                                        <div class="col-sm-9">
                                            <img src="<?php echo base_url() . './lampiran/' . $detail->bukti ?> " height="300" width="270">
                                        </div>
                                    </div>
                                    <div align="right">
                                        <button type="submit" class="btn mb-1 btn-rounded btn-success">Proses<span class="btn-icon-right">
                                                <i class="fa fa-check"></i></span>
                                        </button> 

                                        <button type="cancel" name="tidak" class="btn mb-1 btn-rounded btn-danger">Tolak<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>