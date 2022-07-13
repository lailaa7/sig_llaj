<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDIT PROFIL</h4>
                    <?php foreach ($user as $user) : ?>
                        <form action="<?php echo base_url() . 'admin/Profil/Update/' . $user->id_user ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label class="control-label">ID Data</label>
                                        <input type="text" name="id_user" class="form-control" value="<?= $user->id_user ?>" placeholder="" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Level</label>
                                        <input type="text" name="level" class="form-control" value="<?= $user->level ?>" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $user->nama ?>" placeholder="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?= $user->username ?>" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>