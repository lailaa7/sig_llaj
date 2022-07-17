    <div class="col-lg-12 mt-3">
        <h4 class="card-title">Proses Pengaduan</h4>
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="<?php echo base_url() . 'admin/Data_llaj/Tambah_data' ?>" method="post">

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">No Tiket
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="no_tiket" name="no_tiket" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">Nama Jalan <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="val-email" name="nama_jalan" placeholder="">
                            </div>
                        </div>

                        <div class="form-group row lokasi">
                            <label class="col-lg-4 col-form-label" for="val-password">Lokasi <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="lokasi" name="lokasi" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Koordinat <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="val-confirm-password" name="latitude" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-suggestions"><span class="text-danger"></span>
                            </label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control input-rounded" id="val-suggestions" name="longitude" rows="5" placeholder=""></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn mb-1 btn-rounded btn-primary">Simpan</button>
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