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
<!-- <section class="cta-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2>Sampaikan Aduanmu</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
        <div class="cta position-relative">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-law-document"></i></i>
                        <span class="h3">Tulis Aduan</span>
                        <p>Happy People</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-flag"></i>
                        <span class="h3">700</span>+
                        <p>Surgery Comepleted</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-badge"></i>
                        <span class="h3">40</span>+
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-stat">
                        <i class="icofont-globe"></i>
                        <span class="h3">20</span>
                        <p>Worldwide Branch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

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
                        <div class="icon d-flex align-items-center">
                            <img src="<?php echo base_url() ?>assets/template/images/form-user.png" alt="" class="img-fluid">
                            <!-- <h4 class="mt-3 mb-3">Laboratory services</h4> -->
                        </div>
                        <div class="content">
                            <b>Lokasi : </b><?= $aduan->lokasi ?>
                            <p class="mb-4"><?= $aduan->isi ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- <section class="section clients">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center">
                    <h2>Partners who support us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clients-logo">
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/2.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/6.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="client-thumb">
                    <img src="images/about/6.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section> -->