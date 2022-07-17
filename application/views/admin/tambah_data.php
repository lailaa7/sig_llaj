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
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="<?php echo base_url() . 'admin/Data_llaj/Tambah_data' ?>" method="post">
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">ID Data </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="id_data" name="id_data" value="<?= $no_urut ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Kategori <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <select class="form-control input-rounded" id="kategori" name="kategori">
                                        <option>Pilih Kategori</option>
                                        <?php foreach ($data as $dt) : ?>
                                            <option value="<?php echo $dt->id_kategori ?>"><?php echo $dt->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row jumlah" hidden>
                                <label class="col-lg-4 col-form-label" for="val-email">Jumlah <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="jumlah" name="jumlah" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row simpang" hidden>
                                <label class="col-lg-4 col-form-label" for="val-username">Simpang <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <select class="form-control input-rounded" id="simpang" name="simpang">
                                        <option>Pilih Simpang</option>
                                        <?php foreach ($simpang as $sm) : ?>
                                            <option value="<?php echo $sm->nama_simpang ?>"><?php echo $sm->nama_simpang ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Nama Jalan <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="val-email" name="nama_jalan" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row lokasi">
                                <label class="col-lg-4 col-form-label" for="val-password">Lokasi <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="lokasi" name="lokasi" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Koordinat <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="val-confirm-password" name="latitude" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-suggestions"><span class="text-danger"></span>
                                </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-rounded" id="val-suggestions" name="longitude" rows="5" placeholder=""></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn mb-1 btn-rounded btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Peta Kota Madiun
                    </div>
                </div>
                <div class="card-body">
                    <div class="leaflet-map" id="map" style="width: 100%; height:500px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $("#kategori").change(function() {

        var selected_option = $(this).val();
        console.log(selected_option);
        if (selected_option == 'KTG001') {
            $(".jumlah").removeAttr('hidden');
            $(".simpang").removeAttr('hidden');
            $(".lokasi").attr('hidden', true);
        } else {
            $(".jumlah").attr('hidden', true);
            $(".simpang").attr('hidden', true);
            $(".lokasi").removeAttr('hidden');

        }
    })
</script>
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