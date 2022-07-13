<div class="container">
    <div class="card mb-3 mt-3  text-dark">
        <div class="card-header">
            <div class="card-title text-center">
                <h4>Form Pengaduan</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url() . '/Pengaduan/tambah_pengaduan' ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 px-3">
                        <div class="form-group">
                            <label class="control-label txt-left">Nama</label>
                            <input name="nama_pengirim" id="name" type="text" class="form-control" value="<?php $data ?>">
                            <div class="text-danger">
                                <?php echo form_error('nama_pengirim'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-3">
                        <div class="form-group">
                            <label class="control-label txt-left">No Telepon</label>
                            <input name="no_telp" id="no_telp" type="number" class="form-control">
                            <div class="text-danger">
                                <?php echo form_error('no_telp'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 px-3">
                        <div class="form-group">
                            <label class="control-label txt-left">Bukti Pengaduan</label>
                            <input name="bukti" id="bukti" type="file" class="form-control" accept="image/*">
                            <div class="text-danger">
                                <?php
                                echo $this->session->flashdata('gambar') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-3">
                        <div class="form-group">
                            <label class="control-label txt-left">Deskripsi Pengaduan</label>
                            <textarea name="isi" id="deskripsi" type="text" class="form-control"></textarea>
                            <div class="text-danger">
                                <?php echo form_error('isi'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 px-3">
                        <div class="form-group">
                            <label class="control-label txt-left">Deskripsi Lokasi</label>
                            <input name="lokasi" id="lokasi" type="text" class="form-control">
                            <div class="text-danger">
                                <?php echo form_error('lokasi'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="col-lg-12 text-right">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card mb-3 mt-3  text-dark">
        <div class=" mb-3 mt-5 px-3 py-2">
            <form action="<?= base_url('pengaduan/DetailPengaduan') ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 px-3 mr-auto ml-auto text-center">
                        <div class="form-group">
                            <h2 class="control-label title-color">Lacak Pengaduan Disini</h2>
                            <input name="no_tiket" id="no_tiket" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary">Lacak</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>