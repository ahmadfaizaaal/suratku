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
                        <li class="pc-item">
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
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/profile' ?>">Profil</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Akun Saya</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Akun Saya</h2>
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

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= BASE_THEME; ?>images/user/<?= $profile->img_profile; ?>" alt="user-image" class="user-avatar wid-150" />
                                    <h6 class="mb-0 fs-5 mt-4 fw-bold text-success" id="rekapTitle">Foto Profil</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= BASE_THEME; ?>images/sign/<?= $profile->paraf; ?>" alt="user-image" class="user-avatar wid-150" />
                                    <h6 class="mb-0 fs-5 mt-4 mb-4 fw-bold text-success" id="rekapTitle">Paraf</h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-center justify-content-center" id="divEdit">
                            <a href="<?= BASE_URL . 'v2/profile/edit' ?>" class="btn btn-success btn-md d-flex align-items-center justify-content-center" id="btnEdit">
                                <i class="ti ti-pencil"></i>
                                &nbsp;&nbsp;Ubah Profil
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <?= form_open_multipart('v2/profile/save-changes', 'id="form-edit-profil"'); ?>
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">INFORMASI AKUN </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <input type="hidden" id="allow-edit" name="allow-edit" value="<?= $allowEdit; ?>">
                                <input type="hidden" id="id_user" name="id_user" value="<?= $profile->id_user; ?>">
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="username_profile" id="username_label">Nama Pengguna <span class="fst-italic text-muted fs-7">&nbsp;&nbsp;(digunakan untuk login)</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="username_profile" class="form-control required" placeholder="" name="username_profile" value="<?= $profile->username; ?>" disabled>
                                        <!-- <small class="text-muted ps-1">Digunakan untuk login</small> -->
                                    </div>
                                </div>
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="fullname_profile" id="fullname_label">Nama Lengkap</label>
                                    <div class="col-md-9">
                                        <input type="text" id="fullname_profile" class="form-control required" placeholder="" name="fullname_profile" value="<?= $profile->nama; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="email_profile" id="email_label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" id="email_profile" class="form-control required" placeholder="" name="email_profile" value="<?= $profile->email; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="instansi_profile">Instansi</label>
                                    <div class="col-md-9">
                                        <input type="text" id="instansi_profile" class="form-control required" placeholder="" name="instansi_profile" value="<?= $instansi['nama_instansi']; ?>" disabled>
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="tipeuser_profile">Tipe Pengguna</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tipeuser_profile" class="form-control required" placeholder="" name="tipeuser_profile" value="<?= $profile->jabat; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="image_profile">Foto Profil</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_image_profile" name="prev_image_profile" value="<?= $profile->img_profile; ?>">
                                            <input type="file" class="dropzone-upload" name="image_profile" id="image_profile" accept="image/jpg, image/jpeg, image/png">
                                            <!-- <label for="image_profile" class="custom-file-label" id="label-image-profile"></label> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="paraf_profile">Paraf</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_paraf_profile" name="prev_paraf_profile" value="<?= $profile->paraf; ?>">
                                            <input type="file" class="dropzone-upload" name="paraf_profile" id="paraf_profile" accept="image/jpg, image/jpeg, image/png">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group row align-items-center">
                                    <label for="customFileInput" class="col-md-3 form-label">Paraf</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="customFileInput" hidden>
                                            <button class="btn btn-success" type="button" onclick="document.getElementById('customFileInput').click();">Pilih File</button>
                                            <span class="form-control" id="fileNameDisplay">Tidak ada file dipilih</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                <!-- SOME CODE FROM JQUERY -->
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <!-- END OF MAIN CONTENT -->
            </div>
        </div>
        <!-- END OF MAIN SECTION -->

        <footer class="pc-footer">
            <div class="footer-wrapper container-fluid">
                <div class="row">
                    <div class="col my-1 mt-inverse-1">
                        <?= date("Y") ?> &copy; Copyright Pengadilan Agama Sumbawa Besar | <strong><span class="text-success">Mahkamah Agung RI</span></strong>
                    </div>
                </div>
            </div>
        </footer>
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                const allowEdit = $('#allow-edit').val();
                let removedElement = $("#divEdit a").detach();
                $('#image_profile').attr('disabled', true);
                $('#paraf_profile').attr('disabled', true);
                // $('#customFileInput').attr('disabled', true);

                if (allowEdit) {
                    $('#username_profile').attr('disabled', false);
                    $('#fullname_profile').attr('disabled', false);
                    $('#email_profile').attr('disabled', false);
                    $('#image_profile').removeAttr('disabled');
                    $('#paraf_profile').removeAttr('disabled');

                    // validateNIP();

                    let html = `
                        <div class="d-flex justify-content-end align-items-center">
                            <p class="text-muted me-3 fst-italic mt-3 fs-6" id="required-info">Tanda <span class="text-danger">*</span>) wajib diisi!</p>
                            <a href="<?= BASE_URL . 'v2/profile/' ?>" class="btn btn-danger btn-md me-2 w-10" id="btnCancel">
                                <i class="ti ti-x"></i> &nbsp;&nbsp;Batal
                            </a>
                            <a href="javascript:;" class="btn btn-success btn-md w-10" id="btnSave">
                                <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
                            </a>
                        </div>
                    `;
                    $('#actionCommand').html(html);
                    $('#username_label').append('<span class="text-danger"> *</span>')
                    $('#fullname_label').append('<span class="text-danger"> *</span>')
                    $('#email_label').append('<span class="text-danger"> *</span>')

                    // $("#btnSave").click(function(e) {
                    //     e.preventDefault();  // Mencegah navigasi
                    //     $("#form-edit-profil").submit(); // Submit form
                    // });

                    $('#btnSave').click(function(e) {
                        e.preventDefault();
                        swal({
                            title: 'Anda yakin ingin menyimpan perubahan?',
                            type: 'warning',
                            showCancelButton: true,
                            focusConfirm: false,
                            confirmButtonColor: '#2ba87e',
                            cancelButtonColor: '#dc2625',
                            confirmButtonText: 'Ya',
                            cancelButtonText: 'Tidak'
                        }).then(result => {
                            if (result.value) {
                                let formData = new FormData($("#form-edit-profil")[0]);
                                $.ajax({
                                    url: $("#form-edit-profil").attr('action'),
                                    type: $("#form-edit-profil").attr('method'), 
                                    data: formData,
                                    contentType: false, // Harus false agar FormData bisa mengirim file
                                    processData: false, // Harus false agar FormData tidak diproses sebagai string
                                    success: function(response) {
                                        swal({
                                            title: 'Berhasil!',
                                            text: 'Perubahan telah disimpan.',
                                            type: 'success',
                                            confirmButtonColor: '#2ba87e',
                                            confirmButtonText: 'Oke'
                                        }).then(() => {
                                            window.location.href = '<?= BASE_URL . 'v2/profile/' ?>'; 
                                        });
                                    },
                                    error: function() {
                                        swal({
                                            title: 'Error!',
                                            text: 'Terjadi kesalahan, coba lagi!',
                                            type: 'error',
                                            confirmButtonColor: '#dc2625',
                                            confirmButtonText: 'Oke'
                                        });
                                    }
                                });
                            }
                        });
                    });


                    // document.getElementById("customFileInput").addEventListener("change", function() {
                    //     let fileName = this.files.length > 0 ? this.files[0].name : "Tidak ada file dipilih";
                    //     document.getElementById("fileNameDisplay").textContent = fileName;
                    // });
                    // $("#image_profile").change(function() {
                    //     let fileName = $(this).val().split("\\").pop();
                    //     $('#label-image-profile').addClass('selected').html(fileName);
                    // });
                    // $("#paraf_profile").change(function() {
                    //     let fileName = $(this).val().split("\\").pop();
                    //     $('#label-paraf').addClass('selected').html(fileName);
                    // });
                } else {
                    $("#divEdit").append(removedElement);
                }
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
