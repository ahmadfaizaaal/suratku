<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
    <head>
        <title><?= $title; ?></title>
        <!-- [Favicon] icon -->
        <link rel="icon" href="<?= BASE_THEME; ?>images/suratku-icon.png" type="image/x-icon"> <!-- [Font] Family -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>fonts/inter/inter.css" id="main-font-link" />
        <!-- [Tabler Icons] https://tablericons.com -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>fonts/tabler-icons.min.css" >
        <!-- [Feather Icons] https://feathericons.com -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>fonts/feather.css" >
        <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>fonts/fontawesome.css" >
        <!-- [Material Icons] https://fonts.google.com/icons -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>fonts/material.css" >
        <!-- [Template CSS Files] -->
        <link rel="stylesheet" href="<?= BASE_THEME; ?>css/style.css" id="main-style-link" >
        <link rel="stylesheet" href="<?= BASE_THEME; ?>css/style-preset.css" >

        <!-- EXTERNAL RESOURCES -->
        <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>css/selects/select2.min.css">
        <script src="<?= BASE_THEME; ?>js/jquery/jquery.min.js"></script>
    </head>
    <!-- [Head] end -->
    <!-- [Body] Start -->

    <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
        <!-- PRE LOADER START -->
        <div class="loader-bg">
            <div class="loader-track">
                <div class="loader-fill"></div>
            </div>
        </div>
        <!-- PRE LOADER END -->

        <!-- SIDEBAR MENU -->
        <nav class="pc-sidebar">
            <div class="navbar-wrapper">
                <div class="m-header">
                    <a href="<?= BASE_URL ?>" class="b-brand text-primary">
                        <!-- LOGO SECTION -->
                        <img src="<?= BASE_THEME; ?>images/suratku-logo.png" class="img-fluid logo-lg" alt="logo">
                    </a>
                </div>
                <div class="navbar-content">
                    <div class="card pc-user-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="<?= BASE_THEME; ?>images/user/<?= $this->session->userdata('image') ?>" alt="user-image" class="user-avtar wid-45 rounded-circle" />
                                </div>
                                <div class="flex-grow-1 ms-3 me-2">
                                    <h6 class="mb-0"><?= $this->session->userdata('nama') ?></h6>
                                    <small><?= $this->session->userdata('jabatan') ?></small>
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
                                    <a href="#!">
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
                        <li class="pc-item active">
                            <a href="<?= BASE_URL ?>" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-home"></i></span>
                                <span class="pc-mtext">Beranda</span>
                            </a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#persuratan" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-mail"></i></span>
                                <span class="pc-mtext">Persuratan</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Transaksi Surat<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Masuk</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Keluar</a></li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Buku Agenda<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Masuk</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Keluar</a></li>
                                    </ul>
                                </li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Galeri File<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Masuk</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Surat Keluar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item">
                            <a href="../other/sample-page.html" class="pc-link">
                                <span class="pc-micon">
                                    <i class="ti ti-file-search"></i></span>
                                    <!-- <svg class="pc-icon">
                                        <use xlink:href="#custom-notification-status"></use>
                                    </svg> -->
                                </span>
                                <span class="pc-mtext">Referensi</span>
                            </a>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">
                                <span class="pc-micon"><i class="ti ti-settings"></i></span>
                                <span class="pc-mtext">Pengaturan</span>
                                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                            </a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Instansi</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Users</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Manajemen Data<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Cadangkan Data</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Pulihkan Data</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END OF SIDEBAR -->

        <!-- HEADER MENU -->
        <header class="pc-header">
            <div class="header-wrapper"> 
                <!-- LEFT HEADER -->
                <div class="me-auto pc-mob-drp">
                    <ul class="list-unstyled">
                        <!-- COLLAPSIBLE ICON -->
                        <li class="pc-h-item pc-sidebar-collapse">
                            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="pc-h-item pc-sidebar-popup">
                            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-search-normal-1"></use>
                                </svg>
                            </a>
                            <div class="dropdown-menu pc-h-dropdown drp-search">
                                <form class="px-3 py-2">
                                    <input type="search" class="form-control border-0 shadow-none" placeholder="Masukkan kata kunci pencarian . . ." />
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END OF LEFT HEADER -->

                <!-- RIGHT HEADER -->
                <div class="ms-auto">
                    <ul class="list-unstyled">
                        <!-- NOTIFIKASI -->
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-notification"></use>
                                </svg>
                                <span class="badge bg-danger pc-h-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <h5 class="m-0">Notifikasi</h5>
                                    <a href="#!" class="link-success fs-6">Tandai Sudah Dibaca</a>
                                </div>
                                <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
                                    <p class="text-span">Hari Ini</p>
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="pc-icon text-success">
                                                        <use xlink:href="#custom-layer"></use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="float-end text-sm text-muted">2 menit yang lalu</span>
                                                    <h5 class="text-body mb-2">UI/UX Design</h5>
                                                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                        type and scrambled it to make a type</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="pc-icon text-success">
                                                        <use xlink:href="#custom-sms"></use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="float-end text-sm text-muted">1 jam yang lalu</span>
                                                    <h5 class="text-body mb-2">Message</h5>
                                                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-span">Kemarin</p>
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="pc-icon text-success">
                                                        <use xlink:href="#custom-document-text"></use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="float-end text-sm text-muted">2 jam yang lalu</span>
                                                    <h5 class="text-body mb-2">Forms</h5>
                                                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="pc-icon text-success">
                                                        <use xlink:href="#custom-user-bold"></use>
                                                    </svg>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <span class="float-end text-sm text-muted">12 jam yang lalu</span>
                                                    <h5 class="text-body mb-2">Challenge invitation</h5>
                                                    <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join the challenge</p>
                                                    <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                                                    <button class="btn btn-sm btn-success">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="pc-icon text-success">
                                                        <use xlink:href="#custom-security-safe"></use>
                                                    </svg>
                                                </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="float-end text-sm text-muted">5 jam yang lalu</span>
                                                <h5 class="text-body mb-2">Security</h5>
                                                <p class="mb-0"
                                                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                    type and scrambled it to make a type</p
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-danger">Hapus semua notifikasi</a>
                            </div>
                        </li>
                        <!-- </div> -->
                        <!-- END OF NOTIFIKASI -->

                        <!-- ICON PROFIL SECTION -->
                        <li class="dropdown pc-h-item header-user-profile">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                                <img src="<?= BASE_THEME; ?>images/user/<?= $this->session->userdata('image') ?>" alt="user-image" class="user-avtar" />
                            </a>
                            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <h5 class="m-0">Profil Saya</h5>
                                </div>
                                <div class="dropdown-body">
                                    <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                                        <div class="d-flex mb-1">
                                            <div class="flex-shrink-0">
                                                <img src="<?= BASE_THEME; ?>images/user/<?= $this->session->userdata('image') ?>" alt="user-image" class="user-avtar wid-35" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1"><?= $this->session->userdata('nama'); ?></h6>
                                                <span><?= '@' . $this->session->userdata('username'); ?></span>
                                            </div>
                                        </div>
                                        <hr class="border-secondary border-opacity-50" />
                                        <div class="card">
                                            <div class="card-body py-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0 d-inline-flex align-items-center">
                                                        <svg class="pc-icon text-muted me-2">
                                                            <use xlink:href="#custom-notification-outline"></use>
                                                        </svg>
                                                        Notifikasi
                                                    </h5>
                                                    <div class="form-check form-switch form-check-reverse m-0">
                                                        <input class="form-check-input f-18" type="checkbox" role="switch" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-span">Kelola</p>
                                        <a href="<?= BASE_URL . 'v2/profile/edit' ?>" class="dropdown-item">
                                            <span>
                                                <svg class="pc-icon text-muted me-2">
                                                    <use xlink:href="#custom-setting-outline"></use>
                                                </svg>
                                                <span>Ubah Profil</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <span>
                                                <svg class="pc-icon text-muted me-2">
                                                    <use xlink:href="#custom-lock-outline"></use>
                                                </svg>
                                                <span>Ubah Kata Sandi</span>
                                            </span>
                                        </a>
                                        <hr class="border-secondary border-opacity-50" />
                                        <!-- <div class="d-grid mb-3">
                                            <button class="btn btn-danger">
                                                <svg class="pc-icon me-2">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg>
                                                Keluar
                                            </button>
                                        </div> -->
                                        <div class="d-grid mb-3">
                                            <a href="<?= BASE_URL . 'v2/logout' ?>" class="btn btn-danger d-flex align-items-center justify-content-center">
                                                <svg class="pc-icon me-2">
                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                </svg>
                                                Keluar
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END OF ICON PROFILE SECTION -->
                    </ul>
                </div>
                <!-- END OF RIGHT HEADER -->
            </div>
        </header>
        <!-- END OF HEADER -->

        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Beranda</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Beranda</h2>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END OF BREADCRUMB-->

                <!-- MAIN CONTENT -->
                <div class="row">
                    <!-- CARD DESCRIPTIONS -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 d-flex align-items-center">
                                        <img src="<?= BASE_THEME; ?>images/<?= $instansi['logo']; ?>" alt="user-image" class="user-avatar me-3 wid-100" />
                                        <div class="ms-3">
                                            <h3 class="fw-bold mb-1">
                                                <?= $instansi['nama_instansi']; ?>
                                                <span class="badge bg-light-success ms-2 theme-version"><?= $instansi['status']; ?></span>
                                            </h3>
                                            <p class="mb-2"><?= $instansi['alamat']; ?></p>
                                            <p class="mb-0">
                                                <span class="pc-micon"><a class="pc-link link-success" href="https://pa-sumbawabesar.go.id/" target="blank"><i class="ti ti-world"></i> <?= $instansi['website']; ?> </a></span>
                                                <span class="pc-micon">&nbsp;&nbsp;|&nbsp;&nbsp;  <i class="ti ti-mail"></i> <?= $instansi['email']; ?> </span>
                                                <span class="pc-micon">&nbsp;&nbsp;|&nbsp;&nbsp;  <i class="ti ti-phone"></i> <?= $instansi['telp']; ?> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD DESCRIPTION -->

                    <!-- CARD RESUME COUNTER 1 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Surat Masuk</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-success p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#28a745" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M12 8v8" />
                                                <path d="M8 12l4 4l4 -4" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['surat_masuk'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Surat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END OF CARD RESUME COUNTER 1  -->

                    <!-- CARD RESUME COUNTER 2 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Surat Keluar</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-danger p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#dc2625" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M12 16V8" />
                                                <path d="M16 12l-4 -4l-4 4" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['surat_keluar'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Surat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 2 -->

                    <!-- CARD RESUME COUNTER 3 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Disposisi</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-primary p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#0d6efd" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pin">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                                                <path d="M9 15l-4.5 4.5" />
                                                <path d="M14.5 4l5.5 5.5" />
                                            </svg>         
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['disposisi'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Disposisi</p>
                                        </div>
                                        <!-- <h5 class="mb-0 fs-2 fw-bold text-end me-3">2.004</h5>
                                        <p class="text-muted mb-0">Disposisi</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 3 -->

                    <!-- CARD RESUME COUNTER 4 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Klasifikasi Surat</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-warning p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#ffc107" fill="none" stroke-linecap="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sitemap">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1" />
                                                <path d="M12 9l0 3" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['klasifikasi_surat'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Klasifikasi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 4 -->

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5" id="rekapTitle">Rekapitulasi Surat </h6>
                                    <select class="form-select form-select-sm w-auto text-md" aria-label="Default select example" id="listTahun">
                                        <!-- GENERATED FROM AJAX -->
                                    </select>
                                </div>
                                <div id="rekapitulasi-surat-graph"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5" id="sifatSuratTitle">Sifat Surat </h6>
                                    <select class="form-select form-select-sm w-auto" disabled="disabled" aria-label="Default select example" id="">
                                        <!-- GENERATED FROM AJAX -->
                                    </select>
                                </div>
                                <div class="" id="sifat-surat-graph"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
            <!-- [ Main Content ] end -->
        <footer class="pc-footer">
            <div class="footer-wrapper container-fluid">
                <div class="row">
                    <div class="col my-1 mt-inverse-3">
                        <?= date("Y") ?> &copy; Copyright Pengadilan Agama Sumbawa Besar | <strong><span class="text-success">Mahkamah Agung RI</span></strong>
                    </div>
                </div>
            </div>
        </footer>
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                let rekapSuratChart = null;
                let sifatSuratChart = null;
                let thisYear = new Date().getFullYear();

                $("#rekapTitle").text("Rekapitulasi Surat Tahun " + thisYear);

                $('#listTahun').on('change', function() {
                    thisYear = $(this).val();
                    $('#listTahun option').prop('selected', false);
                    $('#listTahun option[value="' + thisYear + '"]').prop('selected', true);
                    $("#rekapTitle").text("Rekapitulasi Surat Tahun " + thisYear);
                    $("#sifatSuratTitle").text("Sifat Surat Tahun " + thisYear);
                    populateDataSurat(thisYear, 'update');
                });

                populateListYear();
                populateDataSurat(thisYear);

                function populateListYear() {
                    $.ajax({
                        type: 'post',
                        url: base_url + 'v2/populate-list-tahun/',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let html = '';
                            for (let i = 0; i < response.listTahun.length; i++) {
                                html += `<option class="text-md" value="${response.listTahun[i].tahun}">${response.listTahun[i].tahun}</option>`;
                            }
                            $('#listTahun').html(html);
                        },
                        error: function() {
                            swal("Internal Server Error 500!", "Error!", "error");
                        }
                    });
                }

                function populateDataSurat(year, type = null) {
                    $.ajax({
                        type: 'post',
                        url: base_url + 'v2/populate-data-surat/' + year,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (type == null) {
                                // console.log(response)
                                setTimeout(() => {
                                    lineChart(response);
                                    barChart(response)
                                }, 500);
                            } else {
                                lineChart(response, 'update');
                                barChart(response, 'update');
                            }
                        },
                        error: function() {
                            swal("Internal Server Error 500!", "Error!", "error");
                        }
                    });
                }

                function lineChart(param, type = null) {
                    if (!param || !param.suratMasuk || !param.suratKeluar) {
                        console.error("Data param tidak valid!", param);
                        return;
                    }

                    const chartElement = document.querySelector('#rekapitulasi-surat-graph');
                    if (!chartElement) {
                        console.error("Elemen #rekapitulasi-surat-graph tidak ditemukan di DOM!");
                        return;
                    }

                    const lineChartConfig = {
                        chart: {
                            fontFamily: 'Inter var, sans-serif',
                            type: 'area',
                            height: 370,
                            toolbar: {
                                show: false,
                                tools: {
                                    download: true, // Memunculkan opsi download
                                    selection: false,
                                    zoom: false,
                                    zoomin: false,
                                    zoomout: false,
                                    pan: false,
                                    reset: false
                                }
                            }
                            // toolbar: {
                            //     show: false
                            // },
                        },
                        colors: ['#28a745', '#dc2626'],
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                type: 'vertical',
                                inverseColors: false,
                                opacityFrom: 0.2,
                                opacityTo: 0
                            }
                        },
                        dataLabels: { 
                            enabled: false 
                        },
                        stroke: { 
                            width: 3 
                        },
                        plotOptions: {
                            bar: { 
                                columnWidth: '45%', 
                                borderRadius: 4 
                            }
                        },
                        grid: {
                            show: true,
                            borderColor: '#F3F5F7',
                            strokeDashArray: 2
                        },
                        series: [
                            { name: 'Surat Masuk', data: param.suratMasuk },
                            { name: 'Surat Keluar', data: param.suratKeluar }
                        ],
                        xaxis: {
                            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                            axisBorder: { show: false },
                            axisTicks: { show: false }
                        },
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    };

                    if (type == null) {
                        if (rekapSuratChart) {
                            rekapSuratChart.destroy();
                        }
                        rekapSuratChart = new ApexCharts(chartElement, lineChartConfig);
                        rekapSuratChart.render();
                    } else {
                        rekapSuratChart.updateSeries([
                            { name: 'Surat Masuk', data: param.suratMasuk },
                            { name: 'Surat Keluar', data: param.suratKeluar }
                        ]);
                    }
                }

                function barChart(param, type = null) {
                    if (!param || !param.suratMasuk || !param.suratKeluar) {
                        console.error("Data param tidak valid!", param);
                        return;
                    }

                    const chartElement = document.querySelector('#sifat-surat-graph');
                    if (!chartElement) {
                        console.error("Elemen #sifat-surat-graph tidak ditemukan di DOM!");
                        return;
                    }
                    
                    const barChartConfig = {
                        chart: {
                            fontFamily: 'Inter var, sans-serif',
                            type: 'bar',
                            height: 370,
                            stacked: true,
                            toolbar: {
                                show: false
                            },
                            zoom: {
                                enabled: true
                            }
                        },
                        colors: ['#198754', '#dc3545'],
                        series: [
                            {
                                name: 'Surat Masuk',
                                data: [param.sifatSuratMasuk.Biasa, param.sifatSuratMasuk.Segera, param.sifatSuratMasuk.Penting, param.sifatSuratMasuk.Rahasia]
                            }, 
                            {
                                name: 'Surat Keluar',
                                data: [param.sifatSuratKeluar.Biasa, param.sifatSuratKeluar.Segera, param.sifatSuratKeluar.Penting, param.sifatSuratKeluar.Rahasia]
                            }, 
                        ],
                        responsive: [
                            {
                                breakpoint: 480,
                                options: {
                                    legend: {
                                        position: 'bottom',
                                        offsetX: -10,
                                        offsetY: 0
                                    }
                                }
                            }
                        ],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                borderRadius: 5,
                                // borderRadiusApplication: 'end', // 'around', 'end'
                                // borderRadiusWhenStacked: 'last', // 'all', 'last'
                                dataLabels: {
                                    total: {
                                        enabled: true,
                                        style: {
                                            fontSize: '13px',
                                            fontWeight: 900
                                        }
                                    }
                                }
                            },
                        },
                        xaxis: {
                            type: 'category',
                            categories: ['Biasa', 'Segera', 'Penting', 'Rahasia'],
                        },
                        fill: {
                            opacity: 1
                        },
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    };

                    if (type == null) {
                        if (sifatSuratChart) {
                            sifatSuratChart.destroy();
                        }
                        sifatSuratChart = new ApexCharts(chartElement, barChartConfig);
                        sifatSuratChart.render();
                    } else {
                        sifatSuratChart.updateSeries([
                            {
                                name: 'Surat Masuk',
                                data: [param.sifatSuratMasuk.Biasa, param.sifatSuratMasuk.Segera, param.sifatSuratMasuk.Penting, param.sifatSuratMasuk.Rahasia]
                            }, 
                            {
                                name: 'Surat Keluar',
                                data: [param.sifatSuratKeluar.Biasa, param.sifatSuratKeluar.Segera, param.sifatSuratKeluar.Penting, param.sifatSuratKeluar.Rahasia]
                            }
                        ]);
                    }
                }

                // function validateMobilePhone() {
                //     $('#noTelp').on('keyup', function(e) {
                //         numberLength = $('#noTelp').val().length;
                //     });

                //     $('#noTelp').on('keypress', function(e) {
                //         var $this = $(this);
                //         var regex = new RegExp("^[0-9\b]+$");
                //         var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                //         var currentNum = 48;
                //         // for 12 digit number only
                //         if ($this.val().length > 11) {
                //             e.preventDefault();
                //             return false;
                //         }
                //         if (numberLength == 0) {
                //             currentNum = 48;
                //         } else if (numberLength == 1) {
                //             currentNum = 56;
                //         }
                //         if (e.charCode != currentNum && e.charCode > 47 && e.charCode < 58) {
                //             if ($this.val().length == 0) {
                //                 e.preventDefault();
                //                 return false;
                //             } else {
                //                 var result = e.charCode != currentNum && numberLength == 1 ? false : true;
                //                 return result;
                //             }
                //         }
                //         if (regex.test(str)) {
                //             currentNum = 56;
                //             return true;
                //         }
                //         e.preventDefault();
                //         return false;
                //     });
                // }

                // function validateNIP() {
                //     $('#nip').on('keypress', function(e) {
                //         var $this = $(this);
                //         var regex = new RegExp("^[0-9\b]+$");
                //         var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                //         // for 16 digit number only
                //         if ($this.val().length > 17) {
                //             e.preventDefault();
                //             return false;
                //         }
                //         if (regex.test(str)) {
                //             currentNum = 56;
                //             return true;
                //         }
                //         e.preventDefault();
                //         return false;
                //     });
                // }
            });
        </script>
            
        <!-- [Page Specific JS] start -->
        <script src="<?= BASE_THEME; ?>js/sweetalerts/sweetalert2.all.js" type="text/javascript"></script>
        <script src="<?= BASE_THEME; ?>js/sweetalerts/sweet-alerts.js" type="text/javascript"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/apexcharts.min.js"></script>
        <!-- <script src="<?= BASE_THEME; ?>js/pages/dashboard-default.js"></script> -->
        <!-- [Page Specific JS] end -->
        <!-- Required Js -->
        <script src="<?= BASE_THEME; ?>js/plugins/popper.min.js"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/bootstrap.min.js"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/simplebar.min.js"></script>
        <script src="<?= BASE_THEME; ?>js/fonts/custom-font.js"></script>
        <script src="<?= BASE_THEME; ?>js/script.js"></script>
        <script src="<?= BASE_THEME; ?>js/theme.js"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/feather.min.js"></script>

        <script>change_box_container('false');</script>        
        <script>layout_caption_change('true');</script>
        <script>layout_rtl_change('false');</script>
        <script>preset_change("preset-1");</script>
    </body>
  <!-- [Body] end -->
</html>
