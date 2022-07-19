    <div class="col-lg-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengaduan Masuk</h4>
                <div class="table-responsive">
                    <table class="table table-bordered verticle-middle zero-configuration">
                        <thead>
                            <tr>
                                <th>No Tiket</th>
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengaduan as $aduan) : ?>
                                <tr>
                                    <td><?php echo $aduan['no_tiket']; ?> </td>
                                    <td><?php echo $aduan['nama_pengirim']; ?></td>
                                    <td><?php echo $aduan['lokasi']; ?></td>
                                    <td>

                                        <?php
                                        if ($aduan['status'] == 1) {
                                            echo '<span class="label label-pill label-primary">Laporan Masuk</span>';
                                        } elseif ($aduan['status'] == 2) {
                                            echo  '<span class="label label-pill label-warning">Diproses</span>';
                                        } elseif ($aduan['status'] == 3) {
                                            echo '<span class="label label-pill label-danger">Ditolak</span>';
                                        } else {
                                            echo '<span class="label label-pill label-success">Selesai</span>';
                                        }

                                        ?>
                                    </td>

                                    <td>
                                        <div>
                                            <!-- <button type="button" class="btn btn-circle btn-success btn-small" data-toggle="modal" data-target="#proses<?php echo $aduan['no_tiket']; ?>">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i></button> -->

                                            <?php echo anchor(
                                                'admin/pengaduan/detail_pengaduan/' . $aduan['no_tiket'],
                                                '<div class="btn btn-circle btn-warning btn-small"><i class="fas fa-info"></i></div>'
                                            ) ?>
                                            <?php echo anchor(
                                                'admin/proses_pengaduan/proses/' . $aduan['no_tiket'],
                                                '<div class="btn btn-circle btn-info btn-small"><i class="fa-solid fa-comments"></i></div>'
                                            ) ?>

                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    <!-- MODAL KONFIRMASI -->
    <?php foreach ($pengaduan as $aduan) : ?>
        <div class="modal fade" id="proses<?php echo $aduan['no_tiket']; ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Pengaduan</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form name="konfirm" id="konfirm" method="POST" action="<?php echo base_url('admin/pengaduan/konfirmasi'); ?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 px-3">
                                    <div class="form-group">
                                        <label class="control-label txt-left">Proses Pengaduan Ini?</label>
                                        <!-- <input name="nama_pengirim" id="name" type="text" class="form-control" value="<?php $data ?>"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row" hidden>
                                <div class="col-lg-6 px-3">
                                    <div class="form-group">
                                        <label class="control-label txt-left">No Tiket</label>
                                        <input name="no_tiket" id="no_tiket" type="text" class="form-control" value="<?php echo $aduan['no_tiket']; ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="cancel" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-success">Proses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>