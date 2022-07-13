<div class="container-fluid"> 
    <div class="content-body" style="margin-bottom: 150px;">
        <div class="col-lg-12">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-lg-12 mt-4">
                    <div class="card mt-4">
                        <h4 class="card-title px-3 py-3 text-center">Proses Pengaduan Anda</h4>
                        <?php if ($pengaduan == null) : ?>

                            <div class="card-body">
                                <div class="form-group">
                                    <div class="col-12 text-center">
                                        <h3>No Tiket Tidak Ditemukan </h3>
                                        <h5>atau</h5>
                                        <h3>Dalam Tinjauan</h3>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Pengaduan </label>
                                    <div class="col-sm-9">
                                        <?php
                                        if ($pengaduan->status_proses == 1) {
                                            echo '<span class="label label-pill label-primary">Diterima</span>';
                                        } elseif ($pengaduan->status_proses == 2) {
                                            echo  '<span class="label label-pill label-warning">Diproses</span>';
                                        } elseif ($pengaduan->status_proses == 3) {
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
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>