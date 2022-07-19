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
    <div class="card mb-3 mt-3  text-dark">
        <div class="card-header">
            <div class="card-title text-center">
                <h4>Detail LLAJ</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="car-body pt-3 px-3">
                    <div class="form-validation">
                        <form action="<?php echo base_url() . '/Pengaduan/tambah_pengaduan' ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><strong>Kategori</strong> </label>
                                <div class="col-lg-8">
                                    <input name="kategori" id="name" type="text" class="form-control-plaintext" value="<?= $detail->kategori ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><strong>Nama Jalan</strong></label>
                                <div class="col-lg-8">
                                    <input name="nama_jalan" id="name" type="text" class="form-control-plaintext" value="<?= $detail->nama_jalan ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><strong>Lokasi</strong></label>
                                <div class="col-lg-8">
                                    <input name="nama_jalan" id="name" type="text" class="form-control-plaintext" value="<?= $detail->lokasi ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><strong>Koordinat</strong></label>
                                <div class="col-lg-8">
                                    <input name="nama_jalan" id="name" type="text" class="form-control-plaintext" value="<?= $detail->latitude ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><strong></strong></label>
                                <div class="col-lg-8">
                                    <input name="nama_jalan" id="name" type="text" class="form-control-plaintext" value="<?= $detail->longitude ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>
                            </div>
                            <div class="row mt-3 mb-3">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-rounded btn-primary">Kirim</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="card mb-4 mt-4  text-dark">
        <div class=" mb-3 mt-5 px-3 py-2">
            <form action="<?= base_url('pengaduan/DetailPengaduan') ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6 px-3 mr-auto ml-auto text-center">
                        <div class="form-group">
                            <h2 class="control-label title-color">Lacak Pengaduan Disini</h2>
                            <input name="no_tiket" id="no_tiket" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary">Lacak</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
</div>

<?php
$key['longitude']   = '111.52210236294196';
$key['latitude']    = '-7.617912873115704';
?>
<script>
    var key = 'pk.87f2d9fcb4fdd8da1d647b46a997c727';

    var mark;
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
    }, 13);
    var hash = new L.Hash(map);

    //   L.control.zoom({
    //       position:'topright'
    //   }).addTo(map);

    // Add the 'layers' control
    L.control.layers({
        "Streets": streets,
        "Earth": earth,
        "Hybrid": hybrid,
    }, null, {
        position: "topright"
    }).addTo(map);
    // Add the 'scale' control
    L.control.scale().addTo(map);

    // Add geocoder
    var geocoder = L.control.geocoder(key, {
        fullWidth: 650,
        expanded: true,
        markers: true,
        url: 'https://api.locationiq.com/v1',
    }).addTo(map);

    // Re-sort control order so that geocoder is on top
    var geocoderEl = geocoder._container;
    geocoderEl.parentNode.insertBefore(geocoderEl, geocoderEl.parentNode.childNodes[0]);

    // Focus to geocoder input
    geocoder.focus();

    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");


    // Adding a script block to post message to the parent container (think iframed demos)
    window.addEventListener('hashchange', function() {
        parent.postMessage(window.location.hash, '*')
    });
    L.marker(
        [<?= $detail->latitude ?>, <?= $detail->longitude ?>]
    ).addTo(map);
</script>