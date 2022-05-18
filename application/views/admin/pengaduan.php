<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data CCTV</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle zero-configuration">
                            <thead>
                                <tr>
                                    <th>No Tiket</th>
                                    <th>Nama</th>
                                    <th>No Telephon</th>
                                    <th>Lokasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengaduan as $aduan) : ?>
                                    <tr>
                                        <td><?php echo $aduan->no_tiket ?> </td>
                                        <td><?php echo $aduan->nama_pengirim ?></td>
                                        <td><?php echo $aduan->no_telp ?></td>
                                        <td><?php echo $aduan->lokasi ?></td>
                                        <td>
                                            <div>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/proses/' . $aduan->no_tiket,
                                                    '<div class="btn btn-success btn-small"><i class="fa-solid fa-screwdriver-wrench"></i></div>'
                                                ) ?>

                                                <?php echo anchor(
                                                    'admin/pengaduan/detail/' . $aduan->no_tiket,
                                                    '<div class="btn btn-primary btn-small"><i class="fa-solid fa-circle-info"></i></i></div>'
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