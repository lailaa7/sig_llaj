<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <?php echo anchor('admin/tambah_halte', '<button class="btn btn-rounded btn-primary btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Terminal</h4>
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
                                                'admin/cctv_admin/edit_cctv/' . $cctv->id_cctv,
                                                '<div class="btn btn-circle btn-primary btn-small"><i class="fa fa-edit"></i></div>'
                                            ) ?>
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