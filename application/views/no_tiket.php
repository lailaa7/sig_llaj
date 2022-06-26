<div class="container">
    <div class="card mb-2 mt-3 px-4 py-2 text-dark">
        <div class="row">
            <div class="col-lg-6 px-3 mr-auto ml-auto text-center">
                <div class="form-group">
                    <h2 class="control-label title-color">No Tiket Pengaduan Anda</h2>
                    <input name="no_tiket2" id="no_tiket2" value="<?= $terakhir ?>" class="form-control" disabled>
                </div>
            </div>
            <div class="col-lg-12 text-center">
            <a href="<?php echo base_url('no_tiket/pdf/'.$terakhir) ?>" class="btn btn-warning shadow btn-xs sharp"><i class="fa fa-print"></i></a>
                <!-- <?php echo anchor(
                    'no_tiket/print/' . $terakhir,
                    '<div class="btn btn-info btn-small"><i class="fa fa-file mr-3"></i>Donwload</div>'
                ) ?> -->
                <!-- <?php echo anchor('no_tiket/print', '<button class="btn btn-primary btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Donwload</button>') ?> -->
                <!-- <a herf="<?= base_url('no_tiket/print') ?>" class="button btn btn-primary text-white">Download Detail</a> -->
            </div>
        </div>
    </div>


</div>