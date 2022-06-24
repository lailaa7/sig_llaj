<div class="content-body">
    <div class="col-lg-12 mt-3">
        <h4 class="card-title">Tambah Data User </h4>
        <div class="card">
            <div class="card-body">
                <div class="basic-form">

                    <!-- <?php echo validation_errors(); ?> -->

                    <form action="<?php echo base_url() . 'superadmin/akun/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">ID User</label>
                                    <input type="text" name="id_user" class="form-control" value="<?= $no_urut ?>" readonly>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="">

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="superadmin">Superadmin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="username" class="form-control" value="">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="">

                                </div>

                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Aktif</option>
                                        <option value="2">Non-Aktif</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>