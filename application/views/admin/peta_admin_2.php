<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/leaflet_search.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>


<div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

        // Initial map view
        <?php if(count($data_lokasi) > 0): ?>
            var INITIAL_LNG = <?= $data_lokasi[0]['longitude'] ?>;
            var INITIAL_LAT = <?= $data_lokasi[0]['latitude'] ?>;
        <?php else: ?>
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

        <?php if(count($data_lokasi) > 0): 
            for($i = 0; $i < count($data_lokasi); $i++): ?>
                L.marker(
                    [<?= $data_lokasi[$i]['latitude'] ?>, <?= $data_lokasi[$i]['longitude'] ?>]
                ).bindPopup(''+
                    'Nama Jalan: <?= $data_lokasi[$i]['nama_jalan'] ?><br>'+
                    'Kategori: <?= $data_lokasi[$i]['nama_kategori'] ?>'+
                '').addTo(map);
        <?php endfor; endif; ?>
</script>