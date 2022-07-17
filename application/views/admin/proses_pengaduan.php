<div class="col-lg-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Proses Pengaduan</h4>


            <div class="table-responsive">
                <table class="table table-bordered verticle-middle zero-configuration">
                    <thead>
                        <tr>
                            <th>No Tiket</th>
                            <th>Nama Pengirim</th>
                            <th>Lokasi</th>
                            <th>Deskripsi Pengaduan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proses as $pro) : ?>
                            <tr>
                                <td><?php echo $pro['no_tiket']; ?> </td>
                                <td><?php echo $pro['nama_pengirim']; ?> </td>
                                <td><?php echo $pro['lokasi']; ?> </td>
                                <td><?php echo $pro['isi']; ?> </td>
                                <td>

                                    <?php
                                    if ($pro['status_proses'] == 1) {
                                        echo '<span class="label label-pill label-primary">Laporan Diterima</span>';
                                    } elseif ($pro['status_proses'] == 2) {
                                        echo  '<span class="label label-pill label-warning">Diproses</span>';
                                    } elseif ($pro['status_proses'] == 3) {
                                        echo '<span class="label label-pill label-danger">Ditolak</span>';
                                    } else {
                                        echo '<span class="label label-pill label-success">Selesai</span>';
                                    }

                                    ?>
                                </td>
                                <td>
                                    <div>

                                        <?php echo anchor(
                                            'admin/proses_pengaduan/proses/' . $pro['no_tiket'],
                                            '<div class="btn btn-circle btn-success btn-small"><i class="fa-solid fa-comments"></i></div>'
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