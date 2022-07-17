<header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar" style="background-color:#223A66;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu text-white"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="<?php echo base_url('dashboard') ?>">Beranda</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('peta') ?>">Peta LLAJ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data LLAJ <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="<?php echo base_url('data_cctv') ?>">Data CCTV</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_halte') ?>">Data Halte</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_parkir') ?>">Data Parkir Khusus</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_terminal') ?>">Data Terminal</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_stasiun') ?>">Data Stasiun</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url('pengaduan') ?>">Pengaduan</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg navigation" id="navbar" style="background-color:#223A66;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu" style="color: #ffff;"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="<?php echo base_url('dashboard') ?>">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-light" href="<?php echo base_url('peta') ?>">Peta LLAJ</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data LLAJ <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="<?php echo base_url('data_cctv') ?>">Data CCTV</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_halte') ?>">Data Halte</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_parkir') ?>">Data Parkir Khusus</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_terminal') ?>">Data Terminal</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('data_stasiun') ?>">Data Stasiun</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link text-light" href="<?php echo base_url('pengaduan') ?>">Pengaduan</a></li>

                </ul>
            </div>
        </div>
    </nav> -->

</header>