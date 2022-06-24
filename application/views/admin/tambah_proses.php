<div class="content-body">
    <div class="col-lg-12 mt-3">
        <h4 class="card-title">Proses Pengaduan</h4>
        <div class="card">
            <div class="card-body">

                <div class="form-validation">
                    <form action=" <?php if ($tambah->proses1 == null) {
                                        echo base_url() . 'admin/proses_pengaduan/proses1';
                                    } elseif (($tambah->proses1 != null) && ($tambah->proses2 == null) && ($tambah->proses3 == null)) {
                                        echo base_url() . 'admin/proses_pengaduan/proses2';
                                    } elseif (($tambah->proses1 != null) && ($tambah->proses2 != null) && ($tambah->proses3 == null)) {
                                        echo base_url() . 'admin/proses_pengaduan/proses3';
                                    } ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6" hidden>
                                <div class="form-group">
                                    <label class="control-label">No Tiket</label>
                                    <input type="text" name="no_tiket" class="form-control" value="<?php echo $tambah->no_tiket ?>">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Proses 1</label>
                                    <?php if ($tambah->proses1 == null) : ?>
                                        <input type="file" name="proses1" class="form-control" value="">
                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    <?php if ($tambah->proses1 == null) : ?>
                                        <input type="text" name="ket1" class="form-control" value="">

                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>
                                    <!-- <input type="text" name="ket1" class="form-control" value="<?php echo $tambah->ket1 ?>"> -->

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Proses 2</label>
                                    <?php if ($tambah->proses2 == null) : ?>
                                        <input type="file" name="proses2" class="form-control" value="">
                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    <?php if ($tambah->proses2 == null) : ?>
                                        <input type="text" name="ket2" class="form-control" value="">

                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>

                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Proses 3</label>
                                    <?php if ($tambah->proses3 == null) : ?>
                                        <input type="file" name="proses3" class="form-control" value="">
                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Keterangan</label>
                                    <?php if ($tambah->proses3 == null) : ?>
                                        <input type="text" name="ket3" class="form-control" value="">

                                    <?php else : ?>
                                        <input type="text" class="form-control" value="Selesai" disabled>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn btn-primary">Proses</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>