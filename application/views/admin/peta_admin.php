<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/leaflet_search.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Data LLAJ</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data LLAJ</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">
                        <h3>Peta Kota Madiun</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="basic-form mb-3">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="col-3">
                                    <label class="col-form-label">Kategori</label>
                                    <select id="inputState" class="form-control input-rounded">
                                        <option selected="selected">Pilih Kategori</option>
                                        <?php foreach ($kategori as $ktg) : ?>
                                            <option value="<?php echo $ktg->id_kategori ?>"><?php echo $ktg->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control input-rounded" name="longitude" value="" placeholder="Longitude"> -->
                                </div>
                                <div class="col-3 pt-4 mt-3">
                                    <button type="submit" class="btn mb-1 btn-rounded btn-dark mb-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="basic-form mb-3">
                        <?php foreach ($data_lokasi as $key) : ?>
                            <form action="" method="POST">
                                <div class="form-row">
                                    <div class="col-3">
                                        <label class="col-form-label">Longitude</label>
                                        <input type="text" class="form-control input-rounded" name="longitude" value="<?= $key['longitude'] ?>" placeholder="Longitude">
                                    </div>
                                    <div class="col-3">
                                        <label class=" col-form-label">Latitude</label>
                                        <input type="text" class="form-control input-rounded" name="langitude" value="<?= $key['latitude'] ?>" placeholder="Latitude">
                                    </div>
                                    <div class="col-3">
                                        <label class="col-form-label">Ketinggian</label>
                                        <input type="text" class="form-control input-rounded" name value="<?= $key['ketinggian'] ?>" placeholder="Ketinggian">
                                    </div>
                                    <div class="col-3 pt-4 mt-3">
                                        <button type="submit" class="btn mb-1 btn-rounded btn-dark mb-2">Edit Peta</button>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </div>

                    <div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    <?php foreach ($data_lokasi as $key) : ?>
        var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

        // Initial map view
        var INITIAL_LNG = <?= $key['longitude'] ?>;
        var INITIAL_LAT = <?= $key['latitude'] ?>;

        // Change the initial view if there is a GeoIP lookup
        if (typeof Geo === 'object') {
            INITIAL_LNG = Geo.lon;
            INITIAL_LAT = Geo.lat;
        }
        // Add layers that we need to the map
        var streets = L.tileLayer.Unwired({
            key: key,
            scheme: "streets"
        });
        var earth = L.tileLayer.Unwired({
            key: key,
            scheme: "earth"
        });
        var hybrid = L.tileLayer.Unwired({
            key: key,
            scheme: "hybrid"
        });

        var map = L.map('map', {
            scrollWheelZoom: (window.self === window.top) ? true : false,
            dragging: (window.self !== window.top && L.Browser.touch) ? false : true,
            layers: [streets],
            tap: (window.self !== window.top && L.Browser.touch) ? false : true,
        }).setView({
            lng: INITIAL_LNG,
            lat: INITIAL_LAT
        }, 12);
        var hash = new L.Hash(map);

        L.control.layers({
            "Streets": streets,
            "Earth": earth,
            "Hybrid": hybrid,
        }, null, {
            position: "topright"
        }).addTo(map);

        var simpan_geojson_provinsi_indonesia = L.geoJson(geojson_madiun_kota)
        simpan_geojson_provinsi_indonesia.addTo(map);
    <?php endforeach; ?>
    
</script>