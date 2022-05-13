<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <?php echo anchor('admin/tambah_parkir', '<button class="btn btn-primary btn-lg btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Parkir Khusus</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Jalan</th>
                                    <th>Kondisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_parkir as $park) : ?>
                                    <tr>
                                        <td><?php echo $park->nama_jalan ?></td>
                                        <td><?php echo $park->kondisi ?></td>
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
</div>