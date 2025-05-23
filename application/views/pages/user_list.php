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
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">DAFTAR PENGGUNA SISTEM </h6>
                                    <a href="javascript:;" data="" class="btn btn-sm btn-success fs-7 align-items-center justify-content-center" id="btnAdd">
                                        <i class="ti ti-plus me-1"></i> Tambah Data
                                    </a>
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
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama Pengguna"></input>
                                            </th>
                                            <th class="text-center" width="18%">
                                                Nama Lengkap
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama Lengkap"></input>
                                            </th>
                                            <th class="text-center" width="15%">
                                                Email
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Email"></input>
                                            </th>
                                            <th class="text-center" width="20%">
                                                Jabatan
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Jabatan"></input>
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
                                    <tbody id="dataUserTable">
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF MAIN CONTENT -->
            </div>
        </div>
        <!-- END OF MAIN SECTION -->


        <!-- MODAL USER DETAIL -->
        <div class="modal fade" id="modalUserDetail" tabindex="-1" role="dialog" aria-labelledby="modalUserDetailLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <?= form_open_multipart('v2/setting/users/save-changes', 'id="form-edit-user"'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalUserDetailLabel">INFORMASI USER</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id_user" value="0">
                        <input type="hidden" id="actionType" name="actionType" value="">
                        <div class="form-group row align-items-center">
                            <label for="nama" class="label-control col-md-4">Nama Lengkap</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama" name="nama" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="username" class="label-control col-md-4">Nama Pengguna</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text text-success fw-bold" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" id="username" name="username" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                                </div>
                                <!-- <input type="text" class="form-control" id="username" name="username" value=""> -->
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="nip" class="label-control col-md-4">NIP<span class="fst-italic text-muted fs-7">&nbsp;&nbsp;(isi dengan 0 jika tidak ada)</span></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nip" name="nip" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="email" class="label-control col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="email" name="email" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="jabatan" class="label-control col-md-4">Jabatan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-4">
                            <label for="role" class="label-control col-md-4">Tipe Pengguna</label>
                            <div class="col-md-8">
                                <select role="presentation" class="form-control" id="role" name="role">
                                    <option value="1">Administrator</option>
                                    <option value="2">Pegawai</option>
                                    <option value="3">Petugas Dispo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <input type="hidden" name="status_choosen" value="0">
                            <label for="status" class="label-control col-md-4">Status</label>
                            <div class="col-md-8">
                                <span class="d-none" id="statusToggle"></span>
                                <div class="form-check form-switch d-flex gap-3 ms-2 align-items-center">
                                    <input class="form-check-input status-toggle f-18" type="checkbox" id="status" name="status">
                                    <label class="form-check-label" id="statusLabel">Non Aktif</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-success align-items-center" id="btnSave">
                            <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
                        </a>
                        <a href="javascript:;" class="btn btn-secondary align-items-center" data-dismiss="modal" id="btnCancel">
                            <i class="ti ti-x"></i> &nbsp;&nbsp;Tutup
                        </a>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                const modal = $('#modalUserDetail');

                loadData()

                var tableInstance;

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        order: [
                            [6, "desc"]
                        ],
                        pageLength: 10,
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
                        },
                    });

                    return tableInstance.columns.adjust().draw(keep);
                }

                const initialLoad = (tablePage = false) => {
                    tableInstance = drawDataTables('#list-data-user', false, false, tablePage)
                }

                initialLoad()

                //DISABLE SELECT AND SWITCH
                function disableSelects() {
                    $('#list-data-user tbody select').prop('disabled', true);
                    $('.status-switch').prop('disabled', true);
                }

                disableSelects()

                tableInstance.on('draw', function () {
                    disableSelects();
                });
                //END OF DISABLE SELECT AND SWITCH

                //ADD DATA HANDLER
                $('#btnAdd').click(function(e) {
                    e.preventDefault();

                    validateNIP();

                    $('input[name=nama]').val("");
                    $('input[name=username]').val("");
                    $('input[name=nip]').val("");
                    $('input[name=email]').val("");
                    $('input[name=jabatan]').val("");
                    $(`#role option[value="2"]`).prop('selected', true);
                    var statusToggle = $(this).find("#status"); 
                    if (statusToggle.length) {
                        statusToggle.prop("checked", false); // Set checkbox ke unchecked
                    }

                    $('input[name=actionType]').val('add');

                    modal.find('.modal-title').text('TAMBAH DATA USER');
                    modal.modal('show');
                    modal.on('shown.bs.modal', function () {
                        $('#nama').focus();
                    });
                });
                //END OF ADD DATA HANDLER

                //EDIT DATA HANDLER
                $('#dataUserTable').on('click', '.view-detail', function() {
                    var userId = $(this).attr('data');

                    modal.find('.modal-title').text('UBAH DATA USER');
                    modal.modal('show');
                    validateNIP();

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/setting/users/detail/'; ?>' + userId,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let user = {}
                            if (response.user) {
                                user = response.user
                            }
                            $('input[name=actionType]').val('edit');
                            $('input[name=id_user]').val(user.id_user);
                            $('input[name=nama]').val(user.nama);
                            $('input[name=username]').val(user.username);
                            $('input[name=nip]').val(user.nip);
                            $('input[name=email]').val(user.email ?? "-");
                            $('input[name=jabatan]').val(user.jabatan);
                            $(`#role option[value="${user.role}"]`).prop('selected', true);
                            $(`#status`).prop("checked", user.status == 1 ? true : false);
                            $('#statusLabel').html(`
                                ${user.status == 1 ? "Aktif" : "Non Aktif"}
                            `);
                        },
                        error: function() {
                            swal("Error!", "Gagal memuat data!", "error");
                        }
                    });

                    setTimeout(() => {
                        modal.removeAttr('aria-hidden');
                    }, 300);
                });
                
                $(document).on('click', '[data-dismiss="modal"]', function () {
                    $('#modalUserDetail').modal('hide');
                });
                //END OF EDIT DATA HANDLER

                //DELETE DATA HANDLER
                $('#dataUserTable').on('click', '.delete-data', function() {
                    var userId = $(this).attr('data');

                    swal({
                        title: 'Anda yakin ingin menghapus user?',
                        type: 'warning',
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: '#2ba87e',
                        cancelButtonColor: '#dc2625',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Tidak',
                        customClass: 'swal2-custom'
                    }).then(result => {
                        if (result.value) {
                            $.ajax({
                                type: 'ajax',
                                method: 'post',
                                url: '<?= BASE_URL . 'v2/setting/users/delete/'; ?>' + userId,
                                async: false,
                                dataType: 'json',
                                success: function(response) {
                                    if (response.status === "error") {
                                        swal({
                                                title: 'Error!',
                                                text: response.message,
                                                type: 'error',
                                                confirmButtonColor: '#dc2625',
                                                confirmButtonText: 'Oke'
                                            });
                                    } else if (response.status === "success") {
                                        swal({
                                            title: 'Berhasil!',
                                            text: response.message,
                                            type: 'success',
                                            confirmButtonColor: '#2ba87e',
                                            confirmButtonText: 'Oke'
                                        }).then(() => {
                                            window.location.href = '<?= BASE_URL . 'v2/setting/users' ?>'; 
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
                });
                //END OF DELETE DATA HANDLER

                $("#status").change(function () {
                    let statusValue = $(this).is(":checked") ? 1 : 0;
                    $('input[name=status_choosen]').val(statusValue);
                    $('#statusLabel').text(statusValue == 1 ? "Aktif" : "Non Aktif");
                });

                function loadData() {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/setting/users/list'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            const tbody = $("#dataUserTable"); // Target tbody
                            tbody.empty(); // Kosongkan tbody sebelum memasukkan data baru

                            $.each(response.users, function(index, user) {
                                const roleColor = { "1": "success", "2": "warning", "3": "danger" }
                                const roleText = { "1": "Administrator", "2": "Pegawai", "3": "Petugas Dispo" }

                                var row = `
                                    <tr>
                                        <td class="text-center">
                                            <a href="javascript:;" data="${user.id_user}" class="btn btn-sm btn-success view-detail fs-7 me-2" data-toggle="modal" data-target="#modalUserDetail">
                                                <i class="ti ti-pencil"></i> Ubah
                                            </a>
                                            <a href="javascript:;" data="${user.id_user}" class="btn btn-sm btn-danger delete-data fs-7">
                                                <i class="ti ti-trash"></i> Hapus
                                            </a>
                                        </td>
                                        <td>${user.username}</td>
                                        <td>${user.nama}</td>
                                        <td>${user.email ?? "-"}</td>
                                        <td>${user.jabatan}</td>
                                        <td class="text-center">
                                            <span class="d-none">${user.role}</span>
                                            <div class="input-group input-group-sm">
                                                <label class="input-group-text bg-white"><i class="ti ti-chart-radar fw-bold text-${roleColor[user.role]}"></i></label>
                                                <select class="form-select role-select" data-id="${user.id_user}">
                                                    <option value="1" ${user.role == 1 ? "selected" : ""}>${roleText[user.role]}</option>
                                                    <option value="2" ${user.role == 2 ? "selected" : ""}>${roleText[user.role]}</option>
                                                    <option value="3" ${user.role == 3 ? "selected" : ""}>${roleText[user.role]}</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="d-none">${user.status == 1 ? "switch-on" : "switch-off"}</span>
                                            <div class="form-check form-switch d-flex gap-3">
                                                <input class="form-check-input status-switch" type="checkbox" data-id="${user.id_user}" ${user.status == 1 ? "checked" : ""}>
                                                <label class="form-check-label">${user.status == 1 ? "Aktif" : "Non Aktif"}</label>
                                            </div>
                                        </td>
                                    </tr>
                                `;
                                tbody.append(row);
                            });
                        },
                        error: function() {
                            swal("Error!", "Could not get Data from Database!", "error");
                        }
                    });
                }

                $('#btnSave').click(function(e) {
                    e.preventDefault();
                    let statusValue = $("#status").is(":checked") ? 1 : 0;
                    $('input[name=status_choosen]').val(statusValue);
                    let nama = checkIsFilled('nama', 'Nama Lengkap tidak boleh kosong!');
                    let username = checkIsFilled('username', 'Nama Pengguna tidak boleh kosong!');
                    let nip = checkIsFilled('nip', 'NIP tidak boleh kosong!');
                    let jabatan = checkIsFilled('jabatan', 'Jabatan tidak boleh kosong!');
                    let role = checkIsFilled('role', 'Tipe Pengguna tidak boleh kosong!');
                    if (nama && username && nip && jabatan && role) {
                        if (validateEmail()) {
                            modal.modal('hide');
                            swal({
                                title: 'Anda yakin ingin menyimpan perubahan?',
                                type: 'warning',
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonColor: '#2ba87e',
                                cancelButtonColor: '#dc2625',
                                confirmButtonText: 'Ya',
                                cancelButtonText: 'Tidak',
                                customClass: 'swal2-custom'
                            }).then(result => {
                                if (result.value) {
                                    let formData = new FormData($("#form-edit-user")[0]);
                                    $.ajax({
                                        type: 'ajax',
                                        url: $("#form-edit-user").attr('action'),
                                        method: $("#form-edit-user").attr('method'), 
                                        data: formData,
                                        contentType: false, // Harus false agar FormData bisa mengirim file
                                        processData: false, // Harus false agar FormData tidak diproses sebagai string
                                        dataType: 'json',
                                        success: function(response) {
                                            if (response.status === "error") {
                                                swal({
                                                        title: 'Error!',
                                                        text: response.message,
                                                        type: 'error',
                                                        confirmButtonColor: '#dc2625',
                                                        confirmButtonText: 'Oke'
                                                    });
                                            } else if (response.status === "success") {
                                                swal({
                                                    title: 'Berhasil!',
                                                    text: response.message,
                                                    type: 'success',
                                                    confirmButtonColor: '#2ba87e',
                                                    confirmButtonText: 'Oke'
                                                }).then(() => {
                                                    window.location.href = '<?= BASE_URL . 'v2/setting/users' ?>'; 
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

                function validateEmail() {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    let valueEmail = $("#email").val().trim();

                    $("#email_error").remove();

                    if (!valueEmail || valueEmail === '-' || valueEmail === '0') {
                        return true;
                    }

                    if (!emailRegex.test(valueEmail)) {
                        $("#email").after(`<small class="text-danger ps-1" id="email_error">Penulisan email tidak valid!</small>`);

                        setTimeout(function () {
                            $("#email_error").fadeOut(300, function () {
                                $(this).remove();
                            });
                        }, 3000);
                        
                        return false; 
                    }

                    return true; 
                }

                function validateNIP() {
                    $('#nip').on('keypress', function(e) {
                        var $this = $(this);
                        var regex = new RegExp("^[0-9\b]+$");
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        // for 16 digit number only
                        if ($this.val().length >= 18) {
                            e.preventDefault();
                            return false;
                        }
                        if (regex.test(str)) {
                            currentNum = 56;
                            return true;
                        }
                        e.preventDefault();
                        return false;
                    });

                    $('#nip').on('paste', function(e) {
                        e.preventDefault();
                        var pastedText = (e.originalEvent || e).clipboardData.getData('text');
                        var sanitizedText = pastedText.replace(/\D/g, ''); // Hanya angka
                        
                        if (sanitizedText.length > 18) {
                            sanitizedText = sanitizedText.substring(0, 18);
                        }
                        
                        $(this).val(sanitizedText);
                    });
                }

            });
        </script>
