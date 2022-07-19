<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid bg-white">
    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo base_url() . './lampiran/' . $detail->bukti ?> " class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <div class="position-relative mt-3 px-3">
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-air-ticket mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">No Tiket</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->no_tiket ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-calendar mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">Tanggal Pengaduan</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->tgl_pengaduan ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-location-pin mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">Lokasi</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->lokasi ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="mb-6">
                                <div class="fw-bolder text-dark mb-2 fs-3 lh-base">
                                    <h6> <?= $detail->isi ?></h6>
                                </div>
                                <!-- <span class="mt-4 text-gray-600 text-dark">tidak bisa mengakses web wifi jogja kota</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 mt-2 mt-3">
                    <?php
                    if ($detail->status == 1) {
                        echo '<span class="label label-pill label-primary">Diterima</span>';
                    } elseif ($detail->status == 2) {
                        echo  '<span class="label label-pill label-warning">Diproses</span>';
                    } elseif ($detail->status == 3) {
                        echo '<span class="label label-pill label-danger">Ditolak</span>';
                    } else {
                        echo '<span class="label label-pill label-success">Selesai</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Timeline Pengaduan</h4>

                <ul class="timeline">
                    <?php foreach ($timeline as $tm) : ?>
                        <li>
                            <a href="#"><?= $tm['nama'] ?></a>
                            <a href="#" class="float-right"><?= $tm['tgl_proses'] ?></a>
                            <p><?= $tm['keterangan'] ?></p>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>