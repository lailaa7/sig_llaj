<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_madiun_kota.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/geojson_kecamatan_indonesia.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/maps/leaflet_search.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid bg-white">
    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo base_url() . './lampiran/' . $detail->bukti ?> " class="img-fluid w-100">
                </div>
                <div class="col-lg-4">
                    <div class="position-relative mt-3 px-3">
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-air-ticket mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">No Tiket</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->no_tiket ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-calendar mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">Tanggal Pengaduan</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->tgl_pengaduan ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <i class="icofont-location-pin mr-3 text-primary"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <label for="form-control">Lokasi</label>
                                    <span class="text-muted fw-bold d-block fs-7"><?= $detail->lokasi ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-5">
                            <div class="mb-6">
                                <div class="fw-bolder text-dark mb-2 fs-3 lh-base">
                                    <h6> <?= $detail->isi ?></h6>
                                </div>
                                <!-- <span class="mt-4 text-gray-600 text-dark">tidak bisa mengakses web wifi jogja kota</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 mt-2 mt-3">
                    <?php
                    if ($detail->status_proses == 1) {
                        echo '<span class="label label-pill label-primary">Diterima</span>';
                    } elseif ($detail->status_proses == 2) {
                        echo  '<span class="label label-pill label-warning">Diproses</span>';
                    } elseif ($detail->status_proses == 3) {
                        echo '<span class="label label-pill label-danger">Ditolak</span>';
                    } else {
                        echo '<span class="label label-pill label-success">Selesai</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="tracking">
                    <div class="col-md-6 offset-md-3">
                        <h4 class="text-center">Timeline Pengaduan</h4>
                        <div class="tracking-list">
                            <?php foreach ($timeline as $tm) : ?>
                                <div class="tracking-item">
                                    <div class="tracking-icon status-intransit">
                                        <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                    </div>
                                    <div class="tracking-date"><?= $tm['tgl_proses'] ?></span></div>
                                    <div class="tracking-content"><?= $tm['nama'] ?><span><?= $tm['keterangan'] ?></span></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-center">Detail Peta Lokasi</h4>
                <div class="leaflet-map" id="map" style="width: 100%; height:300px;"></div>
            </div>
        </div>

    </div>
</div>
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