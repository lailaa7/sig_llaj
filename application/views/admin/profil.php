<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PROFIL SAYA</h4>
                    <div class="form-validation">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">ID Data</label>
                                    <input type="text" name="" class="form-control" value="<?= $user->id_user ?>" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Level</label>
                                    <input type="text" name="" class="form-control" value="<?= $user->level ?>" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Nama</label>
                                    <input type="text" name="" class="form-control" value="<?= $user->nama ?>" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="" class="form-control" value="<?= $user->username ?>" placeholder="">
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label"></label>
                            <div class="col-lg-6">
                                <a href="<?php echo base_url('admin/Profil/Edit_profil/' . $user->id_user,)
                                            ?>" class="btn mb-1 btn-success"><i class="fa fa-pencil"></i> Edit Profil
                                </a>
                                <!-- <button type="button" class="btn mb-1 btn-success"><i class="fa fa-pencil"></i> Edit Profil</button> -->
                                <!-- <button name="reset" type="reset" class="btn mb-1 btn-info"><i class="fa fa-times"></i> Reset</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>