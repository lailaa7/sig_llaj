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
                                        <th>Longitude</th>
                                        <th>Latitude</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_terminal as $term) : ?>
                                        <tr>
                                            <td><?php echo $term->lokasi ?> </td>
                                            <td><?php echo $term->nama_jalan ?></td>
                                            <td><?php echo $term->jumlah ?></td>
                                            <td><?php echo $term->kondisi ?></td>
                                            <td><?php echo $term->longitude ?></td>
                                            <td><?php echo $term->latitude ?></td>
                                            <td>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/detail_cctv/' . $term->id_terminal,
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