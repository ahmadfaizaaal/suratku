<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= BASE_THEME; ?>images/suratku-icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="<?= BASE_THEME; ?>css/style.css" id="main-style-link" > -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        p {
            font-size: 12px;
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        #float-right td>p {
            text-align: right;
        }

        .custom-padding {
            padding-left: 5px;
        }

        .table-bordered {
            border: 1px solid #1A1A1A;
            font-size: 12px;
            /* margin-top: 20px; */
            border-collapse: collapse;
        }

        .table-bordered>thead>tr>th {
            border: 1px solid #1A1A1A;
            font-size: 12px;
            /* background-color: #F2C19D; */
            text-align: center;
            vertical-align: middle;
        }

        .table-bordered>thead>tr>td {
            border: 1px solid #1A1A1A;
            font-size: 12px;
            text-align: center;
            vertical-align: middle;
        }

        .table-bordered>tbody>tr>td {
            border: 1px solid #1A1A1A;
            font-size: 12px;
            vertical-align: middle;
        }

        h5 {
            font-weight: bold;
            margin-bottom: -20px;
        }

        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 1cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: .7cm;
        }

        .m-1 {
            margin: 0.25rem !important;
        }
    </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif !important;">
    <h5 class="text-center" style="margin-top: -10px;">DAFTAR SURAT <?= strtoupper($typeOfSurat); ?></h5>
    <h5 class="text-center"><?= strtoupper($instansi['nama_instansi']); ?></h5>
    <h5 class="text-center" style="margin-bottom: 20px;">PERIODE <?= strtoupper($dateRange); ?></h5>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" width="4%">
                    No.
                </th>
                <th class="text-center" width="8%">
                    No. Agenda /
                    <br>
                    Kode
                </th>
                <th class="text-center" width="35%">
                    Nomor Surat /
                    <br>
                    Hal Surat
                </th>
                <th class="text-center" width="20%">
                    Asal Surat
                </th>
                <th class="text-center" width="5%">
                    Sifat
                </th>
                <th class="text-center" width="13%">
                    Tanggal Surat
                </th>
                <th class="text-center" width="15%">
                    Tanggal Diterima
                </th>
            </tr>
        </thead>
        <tbody id="dataFilterSurat">
            <?php if (!empty($surat)) : ?>
                <?php foreach ($surat as $index => $item) : ?>
                    <tr>
                        <td class="text-center seq-no">
                            <p class="m-1"><?= $index + 1; ?></p>
                        </td>
                        <td class="text-center">
                            <p class="m-1"><?= $item->no_agenda; ?></p>
                            <hr class="border-secondary border-opacity-50 my-1" />
                            <p class="m-1"><?= $item->kode; ?></p>
                        </td>
                        <td class="text-start">
                            <p class="m-1"><?= $item->no_surat; ?></p>
                            <hr class="border-secondary border-opacity-50 my-1" />
                            <p class="m-1"><?= $item->isi; ?></p>
                        </td>
                        <td class="text-center">
                            <p class="m-1"><?= !empty($item->asal_surat) ? $item->asal_surat : "-"; ?></p>
                        </td>
                        <td class="text-center">
                            <p class="m-1"><?= $item->sifat; ?></p>
                        </td>
                        <td class="text-center">
                            <p class="m-1"><?= tgl_indo($item->tgl_surat); ?></p>
                        </td>
                        <td class="text-center">
                            <p class="m-1"><?= tgl_indo($item->tgl_diterima); ?></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7" class="text-center">Data surat tidak ditemukan</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>