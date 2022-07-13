<div class="container">
    <div class="card mb-2 mt-3 px-4 py-2 text-dark">

        <div class="row justify-content-center">
            <div class="col-lg-6 px-3 mr-auto ml-auto text-center">
                <div class="form-group">
                    <h2 class="control-label title-color">No Tiket Pengaduan Anda</h2>
                    <input name="no_tiket2" id="no_tiket2" value="<?= $terakhir ?>" class="form-control" disabled>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="<?php echo base_url('no_tiket/pdf/' . $terakhir) ?>" class="btn btn-info btn-round-full btn-icon">Download<i class="icofont-download ml-3"></i></i></a>

            </div>
        </div>
    </div>


</div>