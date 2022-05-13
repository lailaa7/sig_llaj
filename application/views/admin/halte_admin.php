<div class="container-fluid">
        <div class="content-body">
            <div class="col-lg-12 mt-3">
                <?php echo anchor('admin/tambah_halte', '<button class="btn btn-primary btn-lg btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Halte</h4>
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
                                    <?php foreach ($data_halte as $halte) : ?>
                                        <tr>
                                            <td><?php echo $halte->lokasi ?> </td>
                                            <td><?php echo $halte->nama_jalan ?></td>
                                            <td><?php echo $halte->jumlah ?></td>
                                            <td><?php echo $halte->kondisi ?></td>
                                            <td><?php echo $halte->longitude ?></td>
                                            <td><?php echo $halte->latitude ?></td>
                                            <td>
                                                <?php echo anchor(
                                                    'admin/cctv_admin/edit_cctv/' . $cctv->id_cctv,
                                                    '<div class="btn btn-primary btn-small"><i class="fa fa-edit"></i></div>'
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