<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css">
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
<script type="text/javascript" src="https://tiles.unwiredlabs.com/js/leaflet-unwired.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-hash/0.2.1/leaflet-hash.min.js"></script>
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.6/leaflet-geocoder-locationiq.min.js"></script>

<div class="col-lg-12 mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" id="form_proses" action="<?php echo base_url('admin/pengaduan/konfirmasi'); ?>">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">ID Proses</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_proses" id="id_proses" class="form-control-plaintext" value="<?= $id ?>">
                            </div>
                        </div>
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
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Detail Lokasi</label>
                            <div class="col-sm-9">
                                <div class="leaflet-map" id="map" style="width: 100%; height:300px;"></div>
                            </div>
                        </div>
                        <input type="text" id="type_proses" name="type_proses" hidden>
                        <?php if (!$detail->status_proses) { ?>
                            <div align="right">
                                <button type="button" onclick="SubmitForm(1)" name="proses" id="proses" class="btn mb-1 btn-rounded btn-success">Proses<span class="btn-icon-right">
                                        <i class="fa fa-check"></i></span>
                                </button>

                                <button type="button" onclick="SubmitForm(2)" name="tolak" id="tolak" class="btn mb-1 btn-rounded btn-danger">Tolak<span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                </button>
                            </div>
                        <?php } ?>

                    </form>

                </div>
            </div>
        </div>
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

    function onMapClicktambah(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!mark) {
            mark = L.marker(e.latlng).addTo(map);
        } else {
            mark.setLatLng(e.latlng);
        }
        console.log(e.latlng);

        latInput.value = lat;
        lngInput.value = lng;
    }
    map.on('click', onMapClicktambah);

    // Adding a script block to post message to the parent container (think iframed demos)
    window.addEventListener('hashchange', function() {
        parent.postMessage(window.location.hash, '*')
    });
</script>