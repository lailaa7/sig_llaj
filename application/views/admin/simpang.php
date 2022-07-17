<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="row page-titles mx-0">
    <div class="col-6">
        <!-- <a href="<?php echo base_url('admin/Kelurahan',)
                        ?>" class="btn btn-rounded btn-primary btn-icon">
            <i class="fa fa-plus fa-sm"></i>Tambah Data
        </a> -->
        <button type="button" class="btn btn-rounded btn-primary btn-icon" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa fa-plus fa-sm"></i>Tambah Data</button>

    </div>
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Simpang</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title ml-4">
                        <h4>Data Simpang</h4>
                    </div>
                    <div class="card body">
                        <div class="table-responsive">
                            <table class="table table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID Simpang</th>
                                        <th>Simpang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($simpang as $smp) : ?>

                                        <tr>
                                            <td><?php echo $smp->id_simpang ?></td>
                                            <td><?php echo $smp->nama_simpang ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/Simpang/Edit_simpang/' . $smp->id_simpang,)
                                                            ?>" class="btn btn-circle btn-primary btn-small">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url('admin/Simpang/Hapus_simpang/' . $smp->id_simpang,)
                                                            ?>" class="btn btn-circle btn-danger btn-small btn-hps">
                                                    <i class="fa-solid fa-trash"></i>
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
</div>

<div class="bootstrap-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo base_url() . 'admin/Simpang/Tambah_simpang' ?>" method="post">
                                <!-- <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">ID Simpang</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="id_kelurahan" name="id_kelurahan" placeholder="" readonly>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label">Simpang <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="simpang" name="simpang" placeholder="" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>