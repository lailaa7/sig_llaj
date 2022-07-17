<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>

<div class="leaflet-map" id="map"></div>

<?php
$key['longitude'] = 111.52210236294196;
$key['latitude'] = -7.617912873115704;
?>

<script>
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

    // var simpan_geojson_provinsi_indonesia = L.geoJson(geojson_madiun_kota)
    // simpan_geojson_provinsi_indonesia.addTo(map);
    // var latInput = document.querySelector("[name=latitude]");
    // var lngInput = document.querySelector("[name=longitude]");

    // var myIcon = new L.Icon({
    //     iconUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-icon-red.png',
    //     shadowUrl: '<?php echo base_url("assets"); ?>/admin/icon/marker-shadow.png',
    //     // iconSize: [40, 45], // size of the icon
    // });

    // var curLocation = [<?= $key['latitude'] ?>,<?= $key['longitude'] ?>];

    // map.attributionControl.setPrefix(false);

    // var marker = new L.marker(curLocation, 
    // {
    //     icon: myIcon ,
    //     draggable: 'true',
    // });

    // marker.on('dragend', function(event)
    // {
    //     var position = marker.getLatLng();
    //     marker.setLatLng(position, {
    //         draggable: 'true',
    //     }).bindPopup(position).update();
    //     $("#longitude").val(position.lng);
    //     $("#latitude").val(position.lat);
    // });

    // map.addLayer(marker);
</script>