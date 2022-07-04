<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Sistem Informasi LLAJ</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/css/style.css">

    <!-- datable -->
    <link href="<?= base_url() ?>assets/admin/./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- kebutuhan maps -->
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <link rel="stylesheet" href="<?=base_url("assets/leaflet/map/styledLayerControl.css")?>" />
    <script src="<?=base_url("assets/leaflet/map/styledLayerControl.js")?>"></script>
    <script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false&key=AIzaSyDeqZIQXFKMXqYccaxFFHtsxlhafvRFeQ4"></script>
    <script src="https://raruto.github.io/cdn/leaflet-google/0.0.3/leaflet-google.js"></script>
    <script src="<?php echo base_url("assets/leaflet/map/Bing.js")?>"></script>
            
    <style>
        #map {
            width:100%;
            height:100%;
        }
        .leaflet-google-layer{
            z-index: 0;
        }
        .leaflet-map-pane{
            z-index: 100;
        }
    </style>

</head>
<body id="top">