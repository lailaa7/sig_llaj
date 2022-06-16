<div class="container-fluid">
    <div class="content-body">
        <div class="col-lg-12 mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" id="form_proses" action="<?php echo base_url('admin/pengaduan/konfirmasi'); ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Tiket</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="no_tiket" id="no_tiket" class="form-control-plaintext" value="<?php echo $detail->no_tiket ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Pelapor</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" name="nama_pengirim" value="<?php echo $detail->nama_pengirim ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" value="<?php echo $detail->no_telp ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Lokasi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control-plaintext" value="<?php echo $detail->lokasi ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Bukti Pengaduan</label>
                                        <div class="col-sm-9">
                                            <img src="<?php echo base_url() . './lampiran/' . $detail->bukti ?> " height="300" width="270">
                                        </div>
                                    </div>
                                    <input type="text" id="type_proses" name="type_proses" hidden>
                                    <div align="right">
                                        <button type="button" onclick="SubmitForm(1)" name="proses" id="proses" class="btn mb-1 btn-rounded btn-success">Proses<span class="btn-icon-right">
                                                <i class="fa fa-check"></i></span>
                                        </button>

                                        <button type="button" onclick="SubmitForm(2)" name="tolak" id="tolak" class="btn mb-1 btn-rounded btn-danger">Tolak<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function SubmitForm(id) {
        console.log(id)
        $('#type_proses').val(id)
        document.getElementById("form_proses").submit();

    }
    // document.getElementById("form_proses").addEventListener("click", function(event) {
    //     event.preventDefault();
    //     console.log('tes');
    // });
</script>