<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <a href="<?php echo base_url('admin/Tambah_parkir',)
                        ?>" class="btn btn-rounded btn-primary btn-icon mb-3">
                <i class="fa fa-plus fa-sm"></i>Tambah Data
            </a>
            <!-- <?php echo anchor('admin/tambah_parkir', '<button class="btn btn-rounded btn-primary btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button>') ?> -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Parkir Khusus</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Jalan</th>
                                    <th>Longitude</th>
                                    <th>Langitude</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_parkir as $park) : ?>
                                    <tr>
                                        <td><?php echo $park->nama_jalan ?></td>
                                        <td><?php echo $park->longitude ?></td>
                                        <td><?php echo $park->latitude ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/Parkir_admin/Edit_parkir/' . $park->id_parkir,)
                                                        ?>" class="btn btn-circle btn-primary btn-small">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url('admin/Parkir_admin/Hapus/' . $park->id_parkir,)
                                                        ?>" class="btn btn-circle btn-danger btn-small btn-hps">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>

                                            <a href="<?php echo base_url('admin/Parkir_admin/Detail_cctv/' . $park->id_parkir,)
                                                        ?>" class="btn btn-circle btn-info btn-small">
                                                <i class="fa fa-eye"></i>
                                            </a>
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