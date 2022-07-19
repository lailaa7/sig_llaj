<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/leaflet_search.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3 mb-3 py-3">
            <div class="card shadow">
                <div class="card-tittle text-center mt-2">
                    <h4>PETA PERSEBARAN LLAJ KOTA MADIUN</h4>
                </div>
                <div class="card-body bg-light">
                    <div class="card-body">
                        <div class="basic-form mb-3">
                            <form action="" method="POST">
                                <div class="form-row">
                                    <div class="col-3">
                                        <label class="col-form-label">Kategori</label>
                                        <select id="kategori" class="form-control input-rounded">
                                            <option selected="selected" value="0">Semua Kategori</option>
                                            <?php foreach ($kategori as $ktg) : ?>
                                                <option value="<?php echo $ktg->id_kategori ?>"><?php echo $ktg->nama_kategori ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="letak-maps"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var kategori = $('#kategori').val();
            $.ajax({
                url: "<?= base_url('Peta/get_kategori/') ?>" + kategori,
                success: function(response) {
                    $('#letak-maps').html(response);
                }
            });

            $('#kategori').on('change', function() {
                var kategori = $(this).val();
                $.ajax({
                    url: "<?= base_url('Peta/get_kategori/') ?>" + kategori,
                    success: function(response) {
                        $('#letak-maps').html(response);
                    }
                });
            })
        })
    </script>