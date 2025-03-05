        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/referensi' ?>">Referensi</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Penomoran</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Klasifikasi Surat</h2>
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
                                        <img src="<?= BASE_THEME; ?>images/institution/<?= $instansi['logo']; ?>" alt="user-image" class="user-avatar me-3 wid-100" />
                                        <div class="ms-3">
                                            <h3 class="fw-bold mb-1">
                                                <?= strtoupper($instansi['nama_instansi']); ?>
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

                    <div class="col-lg-2 col-md-4">
                        <!-- <div class="text-center justify-content-center mb-3" id="divEdit">
                            <a href="<?= BASE_URL . 'v2/profile/edit' ?>" class="btn btn-link-success btn-md d-flex align-items-center justify-content-center" id="btnEdit">
                                <i class="ti ti-circle-plus"></i>
                                &nbsp;&nbsp;Tambah Klasifikasi
                            </a>
                        </div> -->
                        <div class="card component-list-card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="fs-5 fw-bold text-success">DAFTAR KLASIFIKASI</label>
                                </div>
                            </div>
                            <div class="card-body p-0" data-simplebar style="max-height: 50vh; overflow-y: auto;">
                                <ul class="list-group list-group-flush" id="list-klasifikasi">
                                    <!-- RETRIEVE FROM QUERY -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8">
                        <?= form_open_multipart('v2/profile/save-changes', 'id="form-edit-profil"'); ?>
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">INFORMASI AKUN </h6>
                                    <a href="javascript:;" data="" class="btn btn-sm btn-success fs-7 align-items-center justify-content-center">
                                        <i class="ti ti-plus me-1"></i> Tambah Data
                                    </a>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <table class="table table-bordered adjust-table" width="100%" id="list-data-klasifikasi">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="15%">
                                                Aksi
                                            </th>
                                            <th class="text-center" width="17%">
                                                Kode
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama Pengguna"></input>
                                            </th>
                                            <th class="text-center" width="25%">
                                                Keterangan
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama Lengkap"></input>
                                            </th>
                                            <th class="text-center" width="43%">
                                                Uraian
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Email"></input>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataSubKlasifikasi">
                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <!-- END OF MAIN CONTENT -->
            </div>
        </div>
        <!-- END OF MAIN SECTION -->
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                var tableInstance;

                loadDataParent()

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    if ($.fn.DataTable.isDataTable(id)) {
                        $(id).DataTable().clear().destroy(); // Hancurkan DataTable yang sudah ada
                        $(id + " tbody").empty(); // Kosongkan hanya isi tbody, jangan hapus tabel
                    }
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        // order: [
                        //     [2, "desc"]
                        // ],
                        ordering: false,
                        pageLength: 50,
                        paging: true, // Pastikan pagination aktif
                        lengthMenu: [5, 10, 25, 50, 100], // Pilihan jumlah data per halaman
                        language: {
                            paginate: {
                                previous: "<i class='ti ti-chevron-left'></i>",
                                next: "<i class='ti ti-chevron-right'></i>"
                            }
                        },
                        fnInitComplete: function() {
                            var currentTable = this

                            // Apply the search
                            currentTable.api().columns().every( function () {
                                var column = this;
                
                                $( 'input, select', this.header() ).on( 'keyup clear change', function (e) {
                                    if(e.keyCode === 10 && e.keyCode === 13) {
                                        return;
                                    } else {
                                        if(this.value != 'all') {
                                            currentTable.api().column( column.index() ).search( this.value ).draw();
                                        } else {
                                            currentTable.api().search('').columns().search('').draw(true);
                                        }
                                    }
                                });
                            });

                            if(page) {
                                currentTable.api().page(page).draw(false);
                            }

                            $('[data-bs-toggle="tooltip"]').tooltip();
                        },
                    });

                    return tableInstance.columns.adjust().draw(keep);
                }

                const initialLoad = (tablePage = false) => {
                    tableInstance = drawDataTables('#list-data-klasifikasi', false, false, tablePage)
                }

                initialLoad()

                $('#list-klasifikasi').on('click', '.show-sub-data', function() {
                    $(".show-sub-data").removeClass("active"); // Hapus class active dari semua item
                    $(this).addClass("active"); // Tambahkan class active ke item yang diklik

                    let kode = $(this).attr('data');
                    loadDataSubKlasifikasi(kode);
                });

                function loadDataSubKlasifikasi(kode) {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/sub-klasifikasi/'; ?>' + kode,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            console.log(response)

                            if ($.fn.DataTable.isDataTable("#list-data-klasifikasi")) {
                                $("#list-data-klasifikasi").DataTable().clear().destroy();
                                $("#list-data-klasifikasi tbody").empty(); // Kosongkan isi tabel
                            }

                            const tbody = $("#dataSubKlasifikasi"); // Target tbody
                            tbody.empty(); // Kosongkan tbody sebelum memasukkan data baru
                            
                            $.each(response.subKlasifikasi, function(index, data) {
                                var truncatedText = data.uraian.length > 70 ? data.uraian.substring(0, 70) + "..." : data.uraian;
                                var row = `
                                    <tr>
                                        <td class="text-center align-top">
                                            <a href="javascript:;" data="${data.id_klasifikasi}" class="btn btn-sm btn-success view-detail fs-7 me-2" data-toggle="modal" data-target="#modalUserDetail">
                                                <i class="ti ti-pencil"></i> Ubah
                                            </a>
                                            <a href="javascript:;" data="${data.id_klasifikasi}" class="btn btn-sm btn-danger delete-data fs-7">
                                                <i class="ti ti-trash"></i> Hapus
                                            </a>
                                        </td>
                                        <td class="align-top">${data.tree_view}</td>
                                        <td class="align-top">${data.nama}</td>
                                        <td class="align-top" data-bs-toggle="tooltip" data-bs-placement="bottom" title="${data.uraian}">${truncatedText}</td>
                                    </tr>
                                `;
                                tbody.append(row);
                            });

                            drawDataTables("#list-data-klasifikasi", false, false, false);
                        },
                        error: function() {
                            swal("Error!", "Gagal memuat data!", "error");
                        }
                    });
                }

                function loadDataParent() {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/list-parent'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            const ul = $("#list-klasifikasi");
                            let firstKode = null;
                            
                            $.each(response.parent, function(index, parent) {
                                if (index === 0) {
                                    firstKode = parent.kode;
                                }
                                let klasifikasi = parent.kode + ' - ' + parent.nama
                                var li = `
                                    <li>
                                        <a href="javascript:;" class="list-group-item list-group-item-action show-sub-data" data="${parent.kode}">
                                            <span class="fw-bold">${parent.kode}</span> - 
                                            <span>${parent.nama}</span>
                                        </a>
                                    </li>
                                `;
                                ul.append(li);
                            });
                            $(".show-sub-data").first().addClass("active");

                            if (firstKode) {
                                setTimeout(() => {
                                    loadDataSubKlasifikasi(firstKode);
                                }, 100);
                            }
                        },
                        error: function() {
                            swal("Error!", "Could not get Data from Database!", "error");
                        }
                    });
                }

                // function checkIsFilled(id, errorMsg) {
                //     let isFilled = true;
                //     let element = $(`#${id}`);
                //     if (!element.val()) {
                //         element.after(`<small class="text-danger ps-1" id="${id}_error">${errorMsg}</small>`);
                //         setTimeout(function () {
                //             $(`#${id}_error`).fadeOut(300, function () {
                //                 $(this).remove(); // Hapus setelah animasi selesai
                //             });
                //         }, 3000);
                //         isFilled = false;
                //     }
                //     return isFilled;
                // }
            });
        </script>
