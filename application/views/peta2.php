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
                    <div class="basic-form mb-3">
                        <!-- <form action="" method="POST">
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
                        </form> -->
                    </div>
                    <div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script>
    var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

    // Initial map view
    <?php if (count($data_lokasi) > 0) : ?>
        var INITIAL_LNG = <?= $data_lokasi[0]['longitude'] ?>;
        var INITIAL_LAT = <?= $data_lokasi[0]['latitude'] ?>;
    <?php else : ?>
        var INITIAL_LNG = 111.52210236294196;
        var INITIAL_LAT = -7.617912873115704;
    <?php endif; ?>
    // Change the initial view if there is a GeoIP lookup
    // if (typeof Geo === 'object') {
    //     INITIAL_LNG = Geo.lon;
    //     INITIAL_LAT = Geo.lat;
    // }
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

    <?php if (count($data_lokasi) > 0) :
        for ($i = 0; $i < count($data_lokasi); $i++) : ?>
            L.marker(
                [<?= $data_lokasi[$i]['latitude'] ?>, <?= $data_lokasi[$i]['longitude'] ?>]
            ).bindPopup('' +
                'Nama Jalan: <?= $data_lokasi[$i]['nama_jalan'] ?><br>' +
                'Kategori: <?= $data_lokasi[$i]['nama_kategori'] ?><br>' +
                'Kordinat: <?= $data_lokasi[$i]['latitude'] ?><br>' +
                '          <?= $data_lokasi[$i]['longitude'] ?>').addTo(map);
    <?php endfor;
    endif; ?>
</script>