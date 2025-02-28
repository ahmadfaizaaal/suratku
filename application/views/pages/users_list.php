        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Pengaturan</li>
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/setting/users' ?>">Users</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Users</h2>
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

                    <div class="col-lg-12 col-md-12">
                        <?= form_open_multipart('v2/profile/save-changes-password', 'id="form-edit-password"'); ?>
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">DAFTAR PENGGUNA SISTEM </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <!-- PUT SOME CODE HERE -->
                                <table class="table table-bordered adjust-table" width="100%" id="list-data-user">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="12%">
                                                Aksi
                                            </th>
                                            <th class="text-center" width="12%">
                                                Nama Pengguna
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Username"></input>
                                            </th>
                                            <th class="text-center" width="15%">
                                                Nama Lengkap
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Email"></input>
                                            </th>
                                            <th class="text-center" width="15%">
                                                Email
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama"></input>
                                            </th>
                                            <th class="text-center" width="23%">
                                                Jabatan
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Company"></input>
                                            </th>
                                            <th class="text-center" width="13%">
                                                Posisi
                                                <select role="presentation" onclick="event.stopPropagation()" class="mt-3 form-control form-control-sm" id="filter-posisi" >
                                                    <option value="all">Semua Posisi</option>
                                                    <?php foreach(["1" => "Administrator", "2" => "Pegawai", "3" => "Petugas Dispo"] as $index => $item): ?>
                                                        <option value="<?= $index ?>"><?= $item ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </th>
                                            <th class="text-center" width="10%">
                                                Status
                                                
                                                <select role="presentation" onclick="event.stopPropagation()" class="mt-3 form-control form-control-sm" >
                                                    <option value="all">Semua Status</option>
                                                    <?php foreach(['switch-on' => 'Aktif', 'switch-off' => 'Non Aktif'] as $index => $item): ?>
                                                        <option value="<?= $index ?>"><?= $item ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($users as $index => $item): ?>
                                            <tr data-id="<?= $index ?>">
                                                <td class="text-center text-middle" data-item-id="<?= $item->id_user ?>">
                                                    <button href="<?= base_url('plus/master-user/list-user/form/'. $item->id_user) ?>" data-modal-size="modal-lg" data-modal-with-header="true" data-modal-title="Ubah Data User" data-modal-is-static-content="false" class="modal-trigger btn btn-sm btn-success edit-btn" title="Lihat Data"><i class="ti ti-eye"></i> Lihat Data</button>
                                                </td>
                                                <td class="text-middle"><?= $item->username ?></td>
                                                <td class="text-middle"><?= $item->nama ?></td>
                                                <td class="text-middle"><?= $item->email ?></td>
                                                <td class="text-middle"><?= $item->jabatan ?></td>
                                                <td class="text-center text-middle">
                                                    <span class="d-none"><?= $item->role ?></span>
                                                    <?php $roleColor = [ "1" => "success", "2" => "warning", "3" => "danger" ]?>
                                                    <?php $roleText = [ "1" => "Administrator", "2" => "Pegawai", "3" => "Petugas Dispo" ]?>
                                                    <div class="input-group input-group-sm">
                                                        <label class="input-group-text bg-white" for="role-icon-<?= $item->id_user ?>"><i class="ti ti-chart-radar fw-bold text-<?php echo isset($roleColor[$item->role]) ? $roleColor[$item->role] : "secondary" ?>"></i></label>
                                                        <select class="form-select role-select" data-update-url="<?= base_url('plus/master-user/list-user/update-role/'. $item->id_user) ?>" id="role-select-<?= $item->id_user ?>" data-current-role="<?= $item->role ?>">
                                                            <?php foreach($roleText as $role => $text): ?>
                                                                <option value="<?= $role ?>" <?= $item->role == $role ? "selected": "" ?>><?= $text ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="text-start text-middle">
                                                    <span class="d-none"><?= $item->status == 1 ? "switch-on" : "switch-off" ?></span>
                                                    <div class="form-check form-switch d-flex gap-3">
                                                        <input class="form-check-input status-switch" data-update-url="<?= base_url('plus/master-user/list-user/update-status/'. $item->id_user) ?>" type="checkbox" id="switch-<?= $item->id_user ?>" <?= $item->status == 1 ? "checked": "" ?>>
                                                        <label class="form-check-label" for="switch-<?= $item->id_user?>"><?= $item->status == 1 ? "Aktif" : "Non Aktif" ?></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                <div class="d-flex justify-content-end align-items-center">
                                    <p class="text-muted me-3 fst-italic mt-3 fs-6" id="required-info">Tanda <span class="text-danger">*</span>) wajib diisi!</p>
                                    <a href="<?= BASE_URL . 'v2/profile/' ?>" class="btn btn-danger btn-md me-2 w-10" id="btnCancel">
                                        <i class="ti ti-x"></i> &nbsp;&nbsp;Batal
                                    </a>
                                    <a href="javascript:;" class="btn btn-success btn-md me-2 w-10" id="btnSave">
                                        <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
                                    </a>
                                </div>
                            </div> -->
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

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        order: [
                            [4, "asc"]
                        ],
                        pageLength: 5,
                        paging: true, // Pastikan pagination aktif
                        lengthMenu: [5, 10, 25, 50, 100], // Pilihan jumlah data per halaman
                        dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
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
                        },
                    });

                    // tableInstance.on('draw', function() {
                    //     $('.dataTables_paginate .paginate_button').removeClass('btn-primary').addClass('btn-success');
                    // });

                    return tableInstance.columns.adjust().draw(keep);
                }

                const initialLoad = (tablePage = false) => {
                    tableInstance = drawDataTables('#list-data-user', false, false, tablePage)
                }

                initialLoad()

                function disableSelects() {
                    $('#list-data-user tbody select').prop('disabled', true);
                }

                disableSelects()

                tableInstance.on('draw', function () {
                    disableSelects();
                });

                $('#old_password_label').append('<span class="text-danger"> *</span>')
                $('#new_password_label').append('<span class="text-danger"> *</span>')
                $('#confirm_password_label').append('<span class="text-danger"> *</span>')

                $('#btnSave').click(function(e) {
                    e.preventDefault();
                    let oldPassword = checkIsFilled('old_password', 'Kata Sandi saat ini tidak boleh kosong!');
                    let newPassword = checkIsFilled('new_password', 'Kata Sandi Baru tidak boleh kosong!');
                    let confirmPassword = checkIsFilled('confirm_password', 'Ketik Ulang Kata Sandi Baru tidak boleh kosong!');
                    if (oldPassword && newPassword && confirmPassword) {
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
                                let formData = new FormData($("#form-edit-password")[0]);
                                $.ajax({
                                    type: 'ajax',
                                    url: $("#form-edit-password").attr('action'),
                                    method: $("#form-edit-password").attr('method'), 
                                    data: formData,
                                    contentType: false, // Harus false agar FormData bisa mengirim file
                                    processData: false, // Harus false agar FormData tidak diproses sebagai string
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.status === "error") {
                                            $("small.text-danger").remove(); // Hapus error sebelumnya

                                            if (response.errors) {
                                                if (response.errors.new_password) {
                                                    $("#new_password").after(response.errors.new_password);
                                                }
                                                if (response.errors.confirm_password) {
                                                    $("#confirm_password").after(response.errors.confirm_password);
                                                }
                                            }

                                            if (response.message) {
                                                swal({
                                                    title: 'Error!',
                                                    text: response.message,
                                                    type: 'error',
                                                    confirmButtonColor: '#dc2625',
                                                    confirmButtonText: 'Oke'
                                                });
                                            }

                                            // Hapus pesan error setelah 2 detik
                                            setTimeout(function () {
                                                $("small.text-danger").fadeOut(300, function () {
                                                    $(this).remove();
                                                });
                                            }, 5000);
                                        } else if (response.status === "success") {
                                            swal({
                                                title: 'Berhasil!',
                                                text: response.message,
                                                type: 'success',
                                                confirmButtonColor: '#2ba87e',
                                                confirmButtonText: 'Oke'
                                            }).then(() => {
                                                window.location.href = '<?= BASE_URL . 'v2/profile/' ?>'; 
                                            });
                                        }
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
                    }
                });

                function checkIsFilled(id, errorMsg) {
                    let isFilled = true;
                    let element = $(`#${id}`);
                    if (!element.val()) {
                        element.after(`<small class="text-danger ps-1" id="${id}_error">${errorMsg}</small>`);
                        setTimeout(function () {
                            $(`#${id}_error`).fadeOut(300, function () {
                                $(this).remove(); // Hapus setelah animasi selesai
                            });
                        }, 2000);
                        isFilled = false;
                    }
                    return isFilled;
                }
            });
        </script>
