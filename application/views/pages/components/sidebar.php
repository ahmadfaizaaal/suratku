        <!-- SIDEBAR MENU -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="<?= BASE_URL . 'v2/' ?>" class="b-brand text-primary">
                        <!-- LOGO SECTION -->
                        <img src="<?= BASE_THEME; ?>images/suratku-logo.png" class="img-fluid logo-lg" alt="logo">
                    </a>
                </div>
                <div class="navbar-content">
                    <div class="card pc-user-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="<?= BASE_THEME; ?>images/user/<?= $userLogin->img_profile; ?>" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-3 me-2">
                                    <h6 class="mb-0"><?= substr($userLogin->nama, 0, 11); ?></h6>
                                    <?php
                                        $position = array('1' => 'Administrator', '2' => 'Pegawai', '3' => 'Petugas Dispo');
                                    ?>
                                    <small><?= $position[$userLogin->role]; ?></small>
                                </div>
                                <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-sort-outline"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                                <div class="pt-3">
                                    <a href="<?= BASE_URL . 'v2/profile' ?>">
                                        <i class="ti ti-user"></i>
                                        <span>Akun Saya</span>
                                    </a>
                                    <a href="<?= BASE_URL . 'v2/profile/change-password' ?>">
                                        <i class="ti ti-lock"></i>
                                        <span>Ubah Kata Sandi</span>
                                    </a>
                                    <a href="<?= BASE_URL . 'v2/logout' ?>">
                                        <i class="ti ti-power"></i>
                                        <span>Keluar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="pc-navbar">
                        <li class="pc-item pc-caption">
                            <label>Menu Utama</label>
                        </li>
                        <li class="pc-item">
                            <a href="<?= BASE_URL . 'v2/' ?>" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-home"></i></span>
                                <span class="pc-mtext">Beranda</span>
                            </a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="javascript:;" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-mail"></i></span>
                                <span class="pc-mtext">Persuratan</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item pc-hasmenu">
                                    <a href="javascript:;" class="pc-link">Surat Masuk<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="<?= BASE_URL . 'v2/transaksi/surat-masuk' ?>">Daftar Surat</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Cetak Laporan</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">File Surat</a></li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="javascript:;" class="pc-link">Surat Keluar<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Daftar Surat</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Cetak Laporan</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">File Surat</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="pc-item pc-hasmenu">
                                    <a href="javascript:;" class="pc-link">Galeri File<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Masuk</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Keluar</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a href="<?= BASE_URL . 'v2/referensi' ?>" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ti ti-file-search"></i></span>
                                </span>
                                <span class="pc-mtext">Referensi</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') == 1) : ?>
                        <li class="pc-item pc-hasmenu">
                            <a href="javascript:;" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-settings"></i></span>
                                <span class="pc-mtext">Pengaturan</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="<?= BASE_URL . 'v2/setting/instansi' ?>">Instansi</a></li>
                                <li class="pc-item"><a class="pc-link" href="<?= BASE_URL . 'v2/setting/users' ?>">Users</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="javascript:;" class="pc-link">Manajemen Data<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="<?= BASE_URL . 'v2/setting/app/backup' ?>">Pencadangan</a></li>
                                        <li class="pc-item"><a class="pc-link" href="<?= BASE_URL . 'v2/setting/app/restore' ?>">Pemulihan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END OF SIDEBAR -->
        
        <script>
            $(document).ready(function () {
                let currentUrl = window.location.href; // Ambil URL halaman saat ini

                $(".pc-item").removeClass("active"); // Reset semua menu agar tidak ada yang aktif secara default

                $(".pc-item a.pc-link").each(function () {
                    let menuUrl = $(this).attr("href");

                    // Pastikan menuUrl bukan "#" atau "#!"
                    if (menuUrl !== "#!" && menuUrl !== "#" && menuUrl) {
                        let absoluteMenuUrl = new URL(menuUrl, window.location.origin).href;

                        // Pastikan hanya menu yang cocok sepenuhnya atau memiliki subpath yang valid
                        if (currentUrl === absoluteMenuUrl || currentUrl.startsWith(absoluteMenuUrl + "/")) {
                            $(this).parent().addClass("active"); // Tambahkan class 'active' ke menu/submenu
                            $(this).closest(".pc-hasmenu").addClass("active"); // Pastikan menu induk juga aktif
                            $(this).parents(".pc-hasmenu").addClass("active"); // Pastikan semua parent dengan class pc-hasmenu aktif
                            $(this).closest(".pc-submenu").show(); // Tampilkan submenu terkait
                        }
                    }
                });
            });
            // $(document).ready(function () {
            //     let currentUrl = window.location.href; // Ambil URL halaman saat ini

            //     $(".pc-item a.pc-link").each(function () {
            //         let menuUrl = $(this).attr("href");

            //         // Pastikan menuUrl bukan "#" atau "#!"
            //         if (menuUrl !== "#!" && menuUrl !== "#" && menuUrl) {
            //             let absoluteMenuUrl = new URL(menuUrl, window.location.origin).href;

            //             let regex = new RegExp("^" + absoluteMenuUrl + "(/.*)?$"); 
            //             if (regex.test(currentUrl)) {
            //                 $(this).parent().addClass("active"); // Tambahkan class 'active' ke menu/submenu
            //                 $(this).closest(".pc-hasmenu").addClass("active"); // Pastikan menu induk juga aktif
            //                 $(this).closest(".pc-submenu").show(); // Tampilkan submenu terkait
            //             }
            //         }
            //     });
            // });
        </script>