<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <a href="<?php echo base_url('admin/Tambah_speed',)
                        ?>" class="btn btn-rounded btn-primary btn-icon mb-3">
                <i class="fa fa-plus fa-sm"></i>Tambah Data
            </a>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Speed Bump</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Jalan</th>
                                    <th>Titik Pemasangan</th>
                                    <th>Volume (m)</th>
                                    <th>Kelurahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($speed_bump as $sb) : ?>
                                    <tr>
                                        <td><?php echo $sb->nama_jalan ?> </td>
                                        <td><?php echo $sb->titik_pasang ?></td>
                                        <td><?php echo $sb->volume ?></td>
                                        <td><?php echo $sb->kelurahan ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/Speed_admin/edit/' . $sb->id_speed,)
                                                        ?>" class="btn btn-circle btn-primary btn-small">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('admin/Speed_admin/hapus/' . $sb->id_speed,)
                                                        ?>" class="btn btn-circle btn-danger btn-small btn-hps">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                            <!-- <a href="<?php echo base_url('admin/Speed_admin/detail/' . $sb->id_speed,)
                                                        ?>" class="btn btn-circle btn-info btn-small">
                                                <i class="fa fa-eye"></i>
                                            </a> -->
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
</div>
</div>