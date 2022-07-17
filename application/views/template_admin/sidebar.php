        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Admin</li>
                    <li>
                        <a class="has-arrow" href="<?php echo base_url('admin/Dashboard') ?>" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-database"></i> <span class="nav-text">Master Data</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('admin/Data_llaj') ?>">Data LLAJ</a></li>
                            <li><a href="<?php echo base_url('admin/Kategori') ?>">Kategori</a></li>
                            <li><a href="<?php echo base_url('admin/Simpang') ?>">Simpang</a></li>
                            <li><a href="<?php echo base_url('admin/Kelurahan') ?>">Kelurahan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="<?php echo base_url('admin/Peta_admin') ?>" aria-expanded="false">
                            <i class="fa-solid fa-map-location-dot"></i> <span class="nav-text">Peta</span>
                        </a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('admin/cctv_admin') ?>">Peta Lokasi</a></li>
                            <li><a href="<?php echo base_url('admin/parkir_admin') ?>">Kategori</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-bullhorn"></i><span class="nav-text">Pengaduan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('admin/pengaduan') ?>">Pengaduan</a></li>
                            <li><a href="<?php echo base_url('admin/proses_pengaduan') ?>">Proses Pengaduan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <div class="content-body">