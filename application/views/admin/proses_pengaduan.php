<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Proses Pengaduan</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle zero-configuration">
                            <thead>
                                <tr>
                                    <th>No Tiket</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($proses as $pro) : ?>
                                    <tr>
                                        <td><?php echo $pro['no_tiket']; ?> </td>
                                        <td style="text-align:center;">

                                            <?php
                                            if ($pro['status'] == 1) {
                                                echo '<span class="btn mb-1 btn-rounded btn-outline-primary">Diterima</span>';
                                            } elseif ($pro['status'] == 2) {
                                                echo  '<span class="btn mb-1 btn-rounded btn-outline-warning">Diproses</span>';
                                            } elseif ($pro['status'] == 3) {
                                                echo '<span class="btn mb-1 btn-rounded btn-outline-success">Selesai</span>';
                                            } else {
                                                echo '<span class="btn mb-1 btn-rounded btn-outline-danger">Ditolak</span>';
                                            }

                                            ?>
                                        </td>
                                        <td>
                                            <div>
                                                <button type="button" class="btn btn-circle btn-success btn-small" data-toggle="modal" data-target="#proses<?php echo $pro['no_tiket']; ?>">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i></button>

                                                <!-- <?php echo anchor(
                                                            'admin/pengaduan/detail/' . $pro['no_tiket'],
                                                            '<div class="btn btn-circle btn-primary btn-small"><i class="fa-solid fa-circle-info"></i></i></div>'
                                                        ) ?> -->

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
                        <div class="row" >
                            <div class="col-lg-6 px-3">
                                <div class="form-group">
                                    <label class="control-label txt-left"></label>
                                    <input name="no_tiket" id="no_tiket" type="text" class="form-control" value="<?php echo $aduan['no_tiket']; ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" name="tolak" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                        <button type="submit" name="proses" class="btn btn-success">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>