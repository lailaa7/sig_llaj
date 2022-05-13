<div class="container-fluid">
    <div class="content-body">
        <section class="section doctor-single">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Lokasi</th>
                                        <th>Nama Jalan</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_cctv as $cctv) : ?>
                                        <tr>
                                            <td><?php echo $cctv->lokasi ?> </td>
                                            <td><?php echo $cctv->nama_jalan ?></td>
                                            <td><?php echo $cctv->jumlah ?></td>
                                            <td><?php echo $cctv->kondisi ?></td>
                                            <td>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/detail_cctv/' . $cctv->id_cctv,
                                                    '<div class="btn btn-circle btn-info btn-small"><i class="fas fa-eye"></i></div>'
                                                ) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>