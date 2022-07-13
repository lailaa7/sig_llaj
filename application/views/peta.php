<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3 mb-3 py-3">
            <div class="card shadow">
                <div class="card-tittle text-center mt-2">
                    <h4>PETA PERSEBARAN LLAJ KOTA MADIUN</h4>
                </div>
                <div class="card-body bg-light">
                    <div id="map" style="height: 500px"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Google layers
    var g_roadmap = new L.Google('ROADMAP');
    var g_satellite = new L.Google('SATELLITE');
    var g_terrain = new L.Google('TERRAIN');

    // OSM layers
    var osmUrl = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
    var osmAttrib = 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
    var osm = new L.TileLayer(osmUrl, {
        attribution: osmAttrib
    });

    // Bing layers
    var bing1 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {
        type: 'Aerial'
    });
    var bing2 = new L.BingLayer("AvZ2Z8Jve41V_bnPTe2mw4Xi8YWTyj2eT87tSGSsezrYWiyaj0ldMaVdkyf8aik6", {
        type: 'Road'
    });

    var data_cctv = new L.LayerGroup();
    <?php foreach ($data_cctv as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(data_cctv);
    <?php endforeach; ?>

    var data_parkir = new L.LayerGroup();
    <?php foreach ($data_parkir as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(data_parkir);
    <?php endforeach; ?>

    var data_halte = new L.LayerGroup();
    <?php foreach ($data_halte as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(data_halte);
    <?php endforeach; ?>

    var data_stasiun = new L.LayerGroup();
    <?php foreach ($data_stasiun as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(data_stasiun);
    <?php endforeach; ?>

    var data_terminal = new L.LayerGroup();
    <?php foreach ($data_terminal as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(data_terminal);
    <?php endforeach; ?>

    var speed_bump = new L.LayerGroup();
    <?php foreach ($speed_bump as $key => $val) : ?>
        L.marker([<?= $val['latitude'] ?>, <?= $val['longitude'] ?>]).addTo(speed_bump);
    <?php endforeach; ?>

    var map = L.map('map', {
        center: [-7.617912873115704, 111.52210236294196],
        zoom: 13
    });

    // <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40604.434930079675!2d111.49217071372861!3d-7.633906869886319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79be537c813a33%3A0xafe2f173545a53ae!2sMadiun%2C%20Kota%20Madiun%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1656778741606!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    map.addLayer(bing2);

    var baseMaps = [{
        groupName: "Google Base Maps",
        expanded: true,
        layers: {
            "Google Earth": L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }),
            // "OpenStreetMaps"    :   osm,
            "Google Maps": L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }),
            "Hybrid": L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                maxZoom: 20,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }),
        }
    }, ];

    var overlays = [{
        groupName: "Fiter Data",
        expanded: true,
        layers: {
            "Data CCTV": data_cctv,
            "Data Halte": data_halte,
            "Data Parkir": data_parkir,
            "Data Stasiun": data_stasiun,
            "Data Terminal": data_terminal,
            "Speed Bump": speed_bump,
        }
    }];

    // configure StyledLayerControl options for the layer soybeans_sp
    // soybeans_sp.StyledLayerControl = {
    //     removable : true,
    //     visible : false
    // }

    // configure the visible attribute with true to corn_bh
    // corn_bh.StyledLayerControl = {
    //     removable : false,
    //     visible : true
    // }

    var options = {
        container_width: "300px",
        group_maxHeight: "80px",
        container_maxHeight: "350px",
        exclusive: false,
        collapsed: true,
        position: 'topright'
    };

    var control = L.Control.styledLayerControl(baseMaps, overlays, options);
    map.addControl(control);

    // test for adding new base layers dynamically
    // to create a new group simply add a layer with new group name
    control.addBaseLayer(bing1, "Bing Satellite", {
        groupName: "Bing Maps",
        expanded: true
    });
    control.addBaseLayer(bing2, "Bing Road", {
        groupName: "Bing Maps"
    });

    // test for adding new overlay layers dynamically
    // control.addOverlay( corn_bh, "Corn Plant", {groupName : "Belo Horizonte"} ); 

    //control.removeLayer( corn_sp );

    //control.removeGroup( "Rio de Janeiro");

    // control.selectLayer(corn_sp); 
    //control.unSelectLayer(corn_sp); 

    // control.selectGroup("Rio de Janeiro");
    //control.unSelectGroup("Rio de Janeiro");

    // var popup = L.popup()
    // .setLatLng([-16, -54])
    // .setContent("The data that appears in this application are fictitious and do not represent actual data!")
    // .openOn(map);
</script>