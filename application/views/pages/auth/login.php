<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
    <head>
        <title><?= $title; ?></title>
        <!-- [Meta] -->
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
        <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
        <meta name="author" content="Phoenixcoded"> -->

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
        <script src="<?= BASE_THEME; ?>js/jquery/jquery.min.js"></script>
    </head>
    <!-- [Head] end -->
    <!-- [Body] Start -->

    <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-track">
            <div class="loader-fill"></div>
            </div>
        </div>
        <!-- [ Pre-loader ] End -->

        <div class="auth-main">
            <div class="auth-wrapper v1">
                <div class="auth-form">
                    <div class="card my-5">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="<?= BASE_URL . 'v2/' ?>">
                                    <img src="<?= BASE_THEME; ?>images/suratku-logo.png" alt="img" class="img-fluid mb-4">
                                </a>
                            </div>
                            <?= $this->session->flashdata('message'); ?>                            
                            <form class="user" method="post" action="<?= BASE_URL . 'v2/auth/login'; ?>">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nama Pengguna" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger ps-1">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                                    <?= form_error('password', '<small class="text-danger ps-1">', '</small>'); ?>
                                </div>
                                <div class="d-flex mt-1 justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input input-success" type="checkbox" id="rememberMe" name="rememberMe" checked="">
                                        <label class="form-check-label text-muted" for="rememberMe">Ingat Saya?</label>
                                    </div>
                                    <h6 class="text-secondary f-w-400 mb-0">Lupa kata sandi?</h6>
                                </div>
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <h6 class="f-w-500 mb-0">Belum punya akun?</h6>
                                <a href="#" class="link-success">Buat Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->


        <script>
            $(function() {
                setTimeout(function () {
                    $("#flashdata_message").fadeOut(300, function () {
                        $(this).remove(); // Hapus elemen setelah fade out
                    });
                }, 2000);
            });
        </script>



        <!-- Required Js -->
        <script src="<?= BASE_THEME; ?>js/plugins/popper.min.js"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/simplebar.min.js"></script>
        <script src="<?= BASE_THEME; ?>js/plugins/bootstrap.min.js"></script>
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