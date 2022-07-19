<!-- Slider Start -->

<div class="banner" style="background: url('<?= base_url('assets/template/images/bg/bg.png') ?>') no-repeat 50% 50%; background-size: cover;">
    <section class="page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center h-100">
                        <img src="<?php echo base_url() ?>assets/template/images/logo-dishub.png" alt="" style="height: 300px; weidth:300px;">
                        <h1 class="text-capitalize mt-4 text-white">SISTEM INFORMASI GEOGRAFIS</h1>
                        <h1 class="text-capitalize text-white">Lalu Lintas Angkutan Jalan</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-map"></i>
                        </div>
                        <!-- <span>24 Hours Service</span> -->
                        <h4 class="mb-3">Peta LLAJ</h4>
                        <div>
                            <p class="mb-4">Lokasi persebaran sarana prasarana LLAJ</p>
                        </div>
                        <a href="<?php echo base_url('Peta') ?>" class="btn btn-main btn-round-full">Selengkapnya</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-bullhorn"></i>
                        </div>
                        <div class="mt-auto mb-auto">
                            <h4 class="mb-3">Pengaduan</h4>
                            <p>Sampaikan aduan Anda </p>

                        </div>
                        <a href="<?php echo base_url('Pengaduan') ?>" class="btn btn-main btn-round-full">Selengkapnya</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <i class="icofont-support"></i>
                        </div>
                        <div class="mt-auto mb-auto">
                            <h4 class="mb-3">Halaman Admin</h4>
                            <p>Halaman Khusus Admin</p>
                        </div>

                        <a href="<?php echo base_url('Auth/Login') ?>" class="btn btn-main btn-round-full">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section service gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Pengaduan Masuk</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($pengaduan as $aduan) : ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="content">
                            <div class="about-block-item mb-5 mb-lg-0">
                                <img src="<?php echo base_url() . './lampiran/' . $aduan->bukti ?> " alt="" class="img-fluid w-100">
                                <div class="py-2">
                                    <span class="text-muted fs-7">
                                        <i class="icofont-calendar mr-3"></i><?= $aduan->tgl_pengaduan ?>
                                    </span>
                                </div>
                                <div class="py-2">
                                    <span class="text-muted ">
                                        <i class="icofont-location-pin mr-3"></i><?= $aduan->lokasi ?>
                                    </span>
                                </div>
                                <div class="py-2">
                                    <span class="text-muted fs-7">
                                        <h4><?= $aduan->isi ?></h4>
                                    </span>
                                </div>
                                <div class="py-2">
                                    <span class="text-muted fs-7">
                                        <a href="<?php echo base_url('Pengaduan/Detail/') . $aduan->no_tiket   ?>" class="read-more">Lihat<i class="icofont-simple-right ml-2"></i></a>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- <section class="section service ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Pengaduan Masuk</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($pengaduan as $aduan) : ?>
                <div class="col-lg-3 col-md-6">
                    div.card
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="<?php echo base_url() . './lampiran/' . $aduan->bukti ?> " alt="" class="img-fluid w-100">
                        <p class="mt-3"><?= $aduan->tgl_pengaduan ?> </p>
                        <h4 class="mt-3"><?= $aduan->lokasi ?> </h4>
                        <p><?= $aduan->isi ?> </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->