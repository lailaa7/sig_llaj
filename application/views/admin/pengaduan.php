<div class="content-body">
    <div class="col-lg-12 mt-3">
        <!-- <?php echo anchor('admin/tambah_cctv', '<button class="btn btn-primary btn-lg btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?> -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengaduan</h4>
                <div class="table-responsive">
                    <table class="table header-border">
                        <thead>
                            <tr>
                                <th>No Tiket</th>
                                <th>Nama Pelapor</th>
                                <th>No Telephon</th>
                                <th>Lokasi</th>
                                <th>Detail Pengaduan</th>
                                <!-- <th>Bukti</th> -->
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pengaduan as $aduan) : ?>
                                <tr>
                                    <td><?php echo $aduan->no_tiket ?> </td>
                                    <td><?php echo $aduan->nama_pengirim ?></td>
                                    <td><?php echo $aduan->no_telp ?></td>
                                    <td><?php echo $aduan->lokasi ?></td>
                                    <td><?php echo $aduan->isi ?></td>
                                    <!-- <td><?php echo $aduan->bukti ?></td> -->
                                    <td><div>
                                        <?php echo anchor(
                                            'admin/cctv_admin/edit_cctv/' . $aduan->id_pengaduan,
                                            '<div class="btn btn-success btn-small"><i class="fa-solid fa-screwdriver-wrench"></i></div>'
                                        ) ?>
                    
                                        <?php echo anchor(
                                            'admin/pengaduan/proses/' . $aduan->id_pengaduan,
                                            '<div class="btn btn-primary btn-small"><i class="fa-solid fa-circle-info"></i></i></div>'
                                        ) ?>

                                    </div></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>