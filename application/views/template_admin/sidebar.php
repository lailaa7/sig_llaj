        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Admin</li>
                    <li>
                        <a class="nav-label" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Data LLAJ</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('admin/cctv_admin') ?>">CCTV</a></li>
                            <li><a href="<?php echo base_url('admin/parkir_admin') ?>">Parkir Khusus</a></li>
                            <li><a href="<?php echo base_url('admin/halte_admin') ?>">Halte</a></li>
                            <li><a href="<?php echo base_url('admin/stasiun_admin') ?>">Stasiun</a></li>
                            <li><a href="<?php echo base_url('admin/terminal_admin') ?>">Terminal</a></li>
                            <li><a href="<?php echo base_url('admin/speed_admin') ?>">Speed Bump</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Pengaduan</span>
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