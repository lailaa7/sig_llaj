<div class="row page-titles mx-0">
    <div class="col-6">
        <a href="<?php echo base_url('admin/Data_llaj/Tambah',)
                    ?>" class="btn btn-rounded btn-primary btn-icon">
            <i class="fa fa-plus fa-sm"></i>Tambah Data
        </a>
        <!-- <button type="button" class="btn btn-rounded btn-primary btn-icon" data-toggle="modal" data-target="#modalGrid">
            <i class="fa fa-plus fa-sm"></i>Tambah Data
        </button> -->
    </div>
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data LLAJ</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title ml-4">
                        <h4>Data LLAJ</h4>
                    </div>
                    <div class="card body">
                        <div class="table-responsive">
                            <table class="table table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID Data</th>
                                        <th>Kategori</th>
                                        <th>Nama Jalan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $dt) : ?>
                                        <tr>
                                            <td><?php echo $dt->id_data ?></td>
                                            <td><?php echo $dt->id_kategori ?></td>
                                            <td><?php echo $dt->nama_jalan ?></td>
                                            <td>
                                                <a href="<?php echo base_url('admin/Data_llaj/Edit_data/' . $dt->id_data,)
                                                            ?>" class="btn btn-circle btn-primary btn-small">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url('admin/Data_llaj/Hapus_data/' . $dt->id_data,)
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