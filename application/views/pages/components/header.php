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

        <!-- EXTERNAL CSS RESOURCES -->
        <!-- <link rel="stylesheet" type="text/css" href="<?= BASE_THEME ?>css/selects/select2.min.css"> -->
        <link href="<?= BASE_THEME; ?>vendor/simple-datatables/style.css" rel="stylesheet">
	    <link href="<?= BASE_THEME; ?>vendor/dataTables/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="<?= BASE_THEME ?>vendor/datetime/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        <!-- EXTERNAL JS RESOURCES -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>

        <!-- <script src="<?= BASE_THEME; ?>js/jquery/jquery.min.js"></script> -->
        <script src="<?= BASE_THEME; ?>vendor/simple-datatables/simple-datatables.js"></script>
        <script src="<?= BASE_THEME; ?>vendor/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= BASE_THEME; ?>vendor/dataTables/dataTables.bootstrap5.min.js"></script>
        <script src="<?= BASE_THEME; ?>vendor/dataTables/dataTables.rowsGroup.js"></script>
        <script src="<?= BASE_THEME; ?>vendor/dataTables/dataTables.responsive.min.js"></script>
        <!-- jQuery (wajib untuk Select2) -->
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/id.min.js"></script>
        <script src="<?= BASE_THEME ?>vendor/datetime/build/js/bootstrap-datetimepicker.min.js"></script>


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