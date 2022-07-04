<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h4 class="card-title px-3 py-3 text-center">Proses Pengaduan Anda</h4>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Pengaduan </label>
                                <div class="col-sm-9">
                                    <?php
                                    if ($pengaduan->status == 1) {
                                        echo '<span class="label label-pill label-primary">Diterima</span>';
                                    } elseif ($pengaduan->status == 2) {
                                        echo  '<span class="label label-pill label-warning">Diproses</span>';
                                    } elseif ($pengaduan->status == 3) {
                                        echo '<span class="label label-pill label-danger">Ditolak</span>';
                                    } else {
                                        echo '<span class="label label-pill label-success">Selesai</span>';
                                    }

                                    ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Tiket</label>
                                <div class="col-sm-9">
                                    <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?= $pengaduan->no_tiket ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Proses Pengaduan</label>
                                <div class="row align-items-center">
                                    <div class="card col-4 mr-2 mb-2">
                                        <?php if ($pengaduan->proses1 == null) : ?>
                                            <label class="col-sm-8 col-form-label">Pengaduan Belum diproses</label>
                                        <?php else : ?>
                                            <img src="<?php echo base_url() . './lampiran/' . $pengaduan->proses1 ?> " height="300" width="270">
                                            <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?= $pengaduan->ket1 ?>" disabled>
                                        <?php endif; ?>
                                    </div>
                                    <div class="card col-4 mr-2 mb-2">
                                        <?php if ($pengaduan->proses2 == null) : ?>
                                            <label class="col-sm-8 col-form-label">Pengaduan Belum diproses</label>
                                        <?php else : ?>
                                            <img src="<?php echo base_url() . './lampiran/' . $pengaduan->proses2 ?>" height="300" width="270">
                                            <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?= $pengaduan->ket2 ?>" disabled>

                                        <?php endif; ?>
                                    </div>
                                    <div class="card col-4 mr-2">
                                        <?php if ($pengaduan->proses3 == null) : ?>
                                            <label class="col-sm-8 col-form-label">Pengaduan Belum diproses</label>
                                        <?php else : ?>
                                            <img src="<?php echo base_url() . './lampiran/' . $pengaduan->proses3 ?> " height="300" width="270">
                                            <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?= $pengaduan->ket3 ?>" disabled>

                                        <?php endif; ?>
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