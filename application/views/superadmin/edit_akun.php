<div class="content-body">
    <div class="col-lg-12 mt-3">
        <h4 class="card-title">Edit Data User </h4>
        <div class="card">
            <div class="card-body">
                <div class="basic-form">
                    <form action="<?php echo base_url() . 'superadmin/akun/update/' . $this->uri->segment(4) ?>" method="POST" enctype="multipart/form-data">
                        <?php foreach ($user as $us) ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">ID User</label>
                                    <input type="text" name="id_user" class="form-control" value="<?= $us->id_user ?>" readonly>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $us->nama ?>" placeholder="">

                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="username" value="<?= $us->username ?>" class="form-control" value="">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Level</label>
                                    <select name="level" class="form-control">
                                        <option <?php if ($us->level == 'admin') {
                                                    echo "selected";
                                                } ?> value="admin">Admin</option>
                                        <option <?php if ($us->level == 'superadmin') {
                                                    echo "selected";
                                                } ?> value="superadmin">Superadmin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option <?php if ($us->status == 1) {
                                                    echo "selected";
                                                } ?>value="1">Aktif</option>
                                        <option <?php if ($us->status == 2) {
                                                    echo "selected";
                                                } ?>value="2">Non-Aktif</option>
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