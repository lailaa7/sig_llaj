    <div class="col-lg-12 mt-3">
        <h4 class="card-title">Proses Pengaduan</h4>
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="<?php echo base_url() . 'admin/Proses_pengaduan/tanggapan' ?>" method="post">

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">No Tiket
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="no_tiket" name="no_tiket" value="<?= $tambah->no_tiket ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggapan <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control input-rounded" id="val-confirm-password" name="gambar" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Keterangan <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="val-confirm-password" name="keterangan" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn mb-1 btn-rounded btn-primary">Kirim</button>
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