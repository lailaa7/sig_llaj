<div class="content-body">
    <div class="col-lg-12 mt-3">
        <?php echo anchor('admin/tambah_cctv', '<button class="btn btn-primary btn-lg btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Parkir Jalan</h4>
                <div class="table-responsive">
                    <table class="table header-border">
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
                                    <td><a href="<?php echo base_url('admin/tambah_cctv') ?>" class="btn btn-primary btn-small"><i class="fa fa-edit"></i></a>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>