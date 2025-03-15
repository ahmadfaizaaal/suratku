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
                            <div class="page-header-title align-items-center">
                                <h2 class="mb-1">Klasifikasi Surat</h2>
                                <span class="fst-italic text-muted fs-6" id="dasarHukum">(Berdasarkan Keputusan Sekretaris Mahkamah Agung RI Nomor: 627/SEK/SK/VII/2023)</span>
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
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="subKlasifikasiLabel"></h6>
                                    <?php if ($this->session->userdata('role') == 1) : ?>
                                    <a href="javascript:;" data="" class="btn btn-sm btn-success fs-7 align-items-center justify-content-center" id="btnAdd">
                                        <i class="ti ti-plus me-1"></i> Tambah Data
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <table class="table table-bordered adjust-table" width="100%" id="list-data-klasifikasi">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="15%">
                                                Aksi
                                            </th>
                                            <th class="text-center" width="18%">
                                                Kode
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Kode"></input>
                                            </th>
                                            <th class="text-center" width="25%">
                                                Keterangan
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Keterangan"></input>
                                            </th>
                                            <th class="text-center" width="42%">
                                                Uraian
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Uraian"></input>
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

        <!-- MODAL KLASIFIKASI DETAIL -->
        <div class="modal fade" id="modalKlasifikasiDetail" tabindex="-1" role="dialog" aria-labelledby="modalKlasifikasiDetailLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <?= form_open_multipart('v2/referensi/save-changes', 'id="form-klasifikasi"'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalKlasifikasiDetailLabel"> </h5>  <!-- MODAL TITLE -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <input type="hidden" id="idKlasifikasi" name="idKlasifikasi" value="">
                        <input type="hidden" id="actionType" name="actionType" value="">
                        <div class="form-group row align-items-center">
                            <label for="role" class="label-control col-md-4" id="parent_label">Turunan dari Kode</label>
                            <div class="col-md-8">
                                <input type="hidden" name="id_parent" id="id_parent" value="">
                                <select role="presentation" id="parent" class="select2 form-control form-select rounded" name="parent">
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="username" class="label-control col-md-4" id="kode_label">Kode</label>
                            <div class="col-md-8">
                                <div id="kodeKlasifikasi" class="d-flex w-100">
                                    <input class="me-3 text-center form-control rounded flex-grow-1" style="flex: 2; max-width: 20%;" type="text" id="first" name="first" maxlength="2" autocomplete="off" />
                                    <input class="form-control rounded flex-grow-1" style="flex: 8; max-width: 80%;" type="text" id="second" name="second" maxlength="12" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="keterangan" class="label-control col-md-4" id="keterangan_label">Keterangan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label for="uraian" class="label-control col-md-4" id="uraian_label">Uraian</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="uraian" name="uraian" value="" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <input type="hidden" id="status_choosen" name="status_choosen" value="0">
                            <label for="status" class="label-control col-md-4" id="status_label">Status</label>
                            <div class="col-md-8">
                                <span class="d-none" id="statusToggle"></span>
                                <div class="form-check form-switch d-flex gap-3 ms-2 align-items-center">
                                    <input class="form-check-input status-toggle f-18" type="checkbox" id="status" name="status">
                                    <label class="form-check-label" id="statusLabel">Tidak Berlaku</label>
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
                const modal = $('#modalKlasifikasiDetail');
                var kodeKlasifikasi = []
                var tableInstance;
                let isAdding = false;

                loadDataParent()

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    if ($.fn.DataTable.isDataTable(id)) {
                        $(id).DataTable().clear().destroy(); // Hancurkan DataTable yang sudah ada
                        $(id + " tbody").empty(); // Kosongkan hanya isi tbody, jangan hapus tabel
                    }
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        // order: [
                        //     [2, "asc"]
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

                $('#kode_label').append('<span class="text-danger"> *</span>')
                $('#keterangan_label').append('<span class="text-danger"> *</span>')
                $("#status").change(function () {
                    let statusValue = $(this).is(":checked") ? 1 : 0;
                    $('input[name=status_choosen]').val(statusValue);
                    $('#statusLabel').text(statusValue == 1 ? "Berlaku" : "Tidak Berlaku");
                });

                $('#parent').on('change', function() {
                    if (!isAdding) return;
                    let parent = $('#parent').select2('data');
                    if (parent.length > 0) {
                        kode = splitCode(parent[0].text);
                        $('input[name=idKlasifikasi]').val(parent[0].id);
                        let firstValue = kode[0];  // "HK"
                        let secondValue = kode[1] ?? ""; // "1.1" atau ""

                        if (secondValue && !secondValue.endsWith('.')) {
                            secondValue += ".";
                        }

                        $('#first').val(firstValue);
                        $('#second').val(secondValue);

                        setTimeout(() => {
                            $('#second').trigger('focus');
                        }, 100);
                    }
                });

                $('#parent').on('select2:clear', function() {
                    if (!isAdding) return;
                    setTimeout(function() {
                        $('#first').val("");
                        $('#second').val("");
                    }, 10);
                });

                //SHOW DATA SUB KLASIFIKASI HANDLER
                $('#list-klasifikasi').on('click', '.show-sub-data', function() {
                    $(".show-sub-data").removeClass("active"); // Hapus class active dari semua item
                    $(this).addClass("active"); // Tambahkan class active ke item yang diklik

                    let parent = $(this).attr('data');
                    let nama = $(this).attr('data-label');
                    loadDataSubKlasifikasi(parent, nama);
                });

                //ADD DATA HANDLER
                $('#btnAdd').click(function(e) {
                    e.preventDefault();
                    populateListKode();

                    $('#parent').val(null).trigger('change');
                    $("#modalBody input").val("");
                    $("#modalBody textarea").val("");
                    var statusToggle = $(this).find("#status"); 
                    if (statusToggle.length) {
                        statusToggle.prop("checked", false); // Set checkbox ke unchecked
                    }
                    isAdding = true;

                    $('#parent').empty().select2({
                        theme: 'bootstrap-5',
                        width: '100%',
                        placeholder: 'PILIH KODE KLASIFIKASI',
                        allowClear: true,
                        dropdownParent: modal,
                        data: kodeKlasifikasi,
                        language: {
                            noResults: function(params) {
                                return "Kode tidak ditemukan!";
                            },
                            searching: function(params) {
                                return "Mencari...";
                            },
                            inputTooShort: function(params) {
                                var x = params.minimum - params.input.length;
                                return "Masukkan " + x + " karakter lagi";
                            }
                        },
                    });

                    $('input[name=actionType]').val('add');

                    modal.find('.modal-title').text('TAMBAH DATA PENOMORAN');
                    modal.modal('show');
                });

                validateParentCode();
                validateClassificationCode();
                populateListKode();

                //EDIT DATA HANDLER
                $('#dataSubKlasifikasi').on('click', '.edit-data', function() {
                    isAdding = false;
                    let idKlasifikasi = $(this).attr('data');
                    let excludeCode = $(this).attr('data-kode');
                    $('input[name=actionType]').val('edit');
                    populateListKode(excludeCode);

                    $('#parent').empty().select2({
                        theme: 'bootstrap-5',
                        width: '100%',
                        placeholder: 'PILIH KODE KLASIFIKASI',
                        allowClear: true,
                        dropdownParent: modal,
                        data: kodeKlasifikasi,
                        language: {
                            noResults: function(params) {
                                return "Kode tidak ditemukan!";
                            },
                            searching: function(params) {
                                return "Mencari...";
                            },
                            inputTooShort: function(params) {
                                var x = params.minimum - params.input.length;
                                return "Masukkan " + x + " karakter lagi";
                            }
                        },
                    });

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/get-detail/'; ?>' + idKlasifikasi,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let klasifikasi = response.klasifikasi || {}
                            let kode = splitText(klasifikasi.kode) || {}
                            let exists = kodeKlasifikasi.some(item => item.id == klasifikasi.id_parent)
                            
                            $('input[name=idKlasifikasi]').val(klasifikasi.id_klasifikasi);
                            $('input[name=first]').val(kode.letters);
                            $('input[name=second]').val(kode.numbers);
                            setTimeout(() => {
                                $('#parent').val(exists ? klasifikasi.id_parent : null).trigger('change');
                            }, 100);
                            $('input[name=keterangan]').val(klasifikasi.nama);
                            $('textarea[name=uraian]').val(klasifikasi.uraian);
                            $(`#status`).prop("checked", klasifikasi.status == 1 ? true : false);
                            $('#statusLabel').html(`
                                ${klasifikasi.status == 1 ? "Berlaku" : "Tidak Berlaku"}
                            `);
                        },
                        error: function() {
                            swal("Error!", "Gagal memuat data!", "error");
                        }
                    });

                    modal.find('.modal-title').text('UBAH DATA PENOMORAN');
                    modal.modal('show');

                    setTimeout(() => {
                        modal.removeAttr('aria-hidden');
                    }, 300);
                });

                //DELETE DATA HANDLER
                $('#dataSubKlasifikasi').on('click', '.delete-data', function() {
                    let idKlasifikasi = $(this).attr('data');
                    let kode = $(this).attr('data-kode');
                    let option = {
                        title: '',
                        text: '',
                        toBeDeleted: {}
                    }

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/child-availability/'; ?>' + kode,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (response.hasChild) {
                                option.title = 'Perhatian!'
                                option.text = 'Data memiliki turunan kode. Semua turunan juga akan dihapus. Tetap lanjut?'
                                option.toBeDeleted = response.child
                                console.log(option.toBeDeleted)
                            } else {
                                option.title = 'Anda yakin ingin menghapus data ini?'
                                option.toBeDeleted = idKlasifikasi
                            }

                            swal({
                                title: option.title,
                                text: option.text,
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
                                        url: '<?= BASE_URL . 'v2/referensi/delete'; ?>',
                                        method: 'post', 
                                        data: {
                                            param: option.toBeDeleted
                                        },
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
                                                    loadDataParent(kode.substr(0, 2)); 
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
                        },
                        error: function() {
                            swal("Error!", "Gagal memuat data!", "error");
                        }
                    });
                });

                $(document).on('click', '[data-dismiss="modal"]', function () {
                    $('#modalKlasifikasiDetail').modal('hide');
                });

                $('#first').on('input', function() {
                    $(this).val($(this).val().toUpperCase());
                });
                $('#parent').on('select2:open', function() {
                    let searchField = $('.select2-search__field');
                    searchField.on('input', function() {
                        this.value = this.value.toUpperCase();
                    });
                });

                //SAVE DATA HANDLER
                $('#btnSave').click(function(e) {
                    e.preventDefault();
                    
                    const action = $('#actionType').val()

                    let kode = checkIsFilled(['first'], 'Kode tidak boleh kosong!');
                    let keterangan = checkIsFilled(['keterangan'], 'Keterangan tidak boleh kosong!');
                    let statusValue = $("#status").is(":checked") ? 1 : 0;
                    $('input[name=status_choosen]').val(statusValue);
                    
                    if ($('#second').val().endsWith('.')) {
                        let parentDiv = $('#second').closest('.form-group');
                        parentDiv.find('.error-message').remove();
                        parentDiv.append(`<small class="ms-2 text-danger ps-1 error-message">Tidak boleh berakhiran dengan tanda (.)!</small>`);

                        setTimeout(function () {
                            parentDiv.find('.error-message').fadeOut(300, function () {
                                $(this).remove();
                            });
                        }, 3000);
                    } else {
                        if (kode && keterangan) {
                            let redirectCode = $('#first').val()
                            let redirectLabel = $('#subKlasifikasiLabel').text()
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
                                    let paramData = {
                                        idKlasifikasi: $('#idKlasifikasi').val(),
                                        actionType: $('#actionType').val(),
                                        parent: $('#parent').val(), 
                                        first: $('#first').val(), 
                                        second: $('#second').val(),
                                        keterangan: $('#keterangan').val(),
                                        uraian: $('#uraian').val(),
                                        status: $('#status_choosen').val()
                                    }
                                    console.log(paramData)
                                    $.ajax({
                                        type: 'ajax',
                                        url: '<?= BASE_URL . 'v2/referensi/save-changes'; ?>',
                                        method: 'post', 
                                        data: paramData,
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
                                                    loadDataParent(redirectCode); 
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

                function loadDataSubKlasifikasi(kode, label) {
                    const disabled = '<?= $this->session->userdata('role') == '1' ? '' : 'disabled'; ?>';
                    const colorButtonEdit = disabled === '' ? 'btn-success' : 'btn-outline-success';
                    const colorButtonDelete = disabled === '' ? 'btn-danger' : 'btn-outline-danger';

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/list-sub-klasifikasi/'; ?>' + kode,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response)

                            $('#subKlasifikasiLabel').text('SUB KLASIFIKASI ' + label.toUpperCase());

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
                                            <a href="javascript:;" data="${data.id_klasifikasi}" data-kode="${data.kode}" class="btn btn-sm ${colorButtonEdit} edit-data fs-7 me-2 ${disabled}" data-toggle="modal" data-target="#modalKlasifikasiDetail">
                                                <i class="ti ti-pencil"></i> Ubah
                                            </a>
                                            <a href="javascript:;" data="${data.id_klasifikasi}" data-kode="${data.kode}" class="btn btn-sm ${colorButtonDelete} delete-data fs-7 ${disabled}">
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

                function loadDataParent(kode = null) {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/referensi/list-parent-klasifikasi'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            const ul = $("#list-klasifikasi");
                            ul.empty();

                            let firstKode = null;
                            let firstLabel = null;
                            let activeKode = kode;
                            let foundActiveKode = false;
                            
                            $.each(response.parent, function(index, parent) {
                                if (index === 0) {
                                    firstKode = parent.kode;
                                    firstLabel = parent.nama;
                                    $('input[name=idKlasifikasi]').val(parent.id_klasifikasi);
                                }
                                if (activeKode === parent.kode) {
                                    foundActiveKode = true;
                                }
                                var li = `
                                    <li>
                                        <a href="javascript:;" class="list-group-item list-group-item-action show-sub-data" data="${parent.kode}" data-label="${parent.nama}">
                                            <span class="fw-bold">${parent.kode}</span> - 
                                            <span>${parent.nama}</span>
                                        </a>
                                    </li>
                                `;
                                ul.append(li);
                            });

                            let selectedKode = foundActiveKode ? activeKode : firstKode;
                            let selectedLabel = response.parent.find(p => p.kode === selectedKode)?.nama || firstLabel;

                            $(".show-sub-data").removeClass("active");
                            $(`.show-sub-data[data="${selectedKode}"]`).first().addClass("active");

                            if (selectedKode) {
                                setTimeout(() => {
                                    loadDataSubKlasifikasi(selectedKode, selectedLabel);
                                }, 100);
                            }
                        },
                        error: function() {
                            swal("Error!", "Could not get Data from Database!", "error");
                        }
                    });
                }

                function validateParentCode() { 
                    $('#second').on('keypress', function(e) { 
                        var $this = $(this);
                        var currentValue = $this.val();
                        var charCode = e.which || e.charCode;
                        var str = String.fromCharCode(charCode);
                        var regex = /^[0-9.]+$/;
                        
                        if (!regex.test(str)) {
                            e.preventDefault();
                            return false;
                        }

                        if (currentValue.length === 0 && str === "0") {
                            e.preventDefault();
                            return false;
                        }

                        if (str === "0" && currentValue.slice(-1) === ".") {
                            e.preventDefault();
                            return false;
                        }

                        if (currentValue.length >= 12) {
                            e.preventDefault();
                            return false;
                        }

                        var dotCount = (currentValue.match(/\./g) || []).length;
                        if (str === "." && dotCount >= 2) {
                            e.preventDefault();
                            return false;
                        }

                        if (str === "." && currentValue.slice(-1) === ".") {
                            e.preventDefault();
                            return false;
                        }

                        var segments = currentValue.split(".");
                        var lastSegment = segments[segments.length - 1];

                        if (lastSegment.length >= 2 && str.match(/[0-9]/)) {
                            e.preventDefault();
                            return false;
                        }

                        return true;
                    });

                    $('#second').on('paste', function(e) {
                        e.preventDefault();
                    });
                }

                function validateClassificationCode() {
                    $('#first').on('keypress', function(e) {
                        var currentValue = $(this).val();
                        var charCode = e.which || e.keyCode;
                        var str = String.fromCharCode(charCode);

                        // Hanya memperbolehkan huruf A-Z (huruf besar)
                        var regex = /^[A-Za-z]$/;

                        // Cek apakah karakter yang ditekan valid
                        if (!regex.test(str)) {
                            e.preventDefault();
                            return false;
                        }

                        // Cek apakah input sudah mencapai 2 karakter
                        if (currentValue.length >= 2) {
                            e.preventDefault();
                            return false;
                        }

                        return true;
                    });

                    $('#first').on('paste', function(e) {
                        e.preventDefault();
                    });
                }

                function splitText(input) {
                    var match = input.match(/^([A-Za-z]*)([0-9.]*)$/);

                    if (match) {
                        let letters = match[1] || "";  // Bagian huruf (bisa kosong)
                        let numbers = match[2] || "";  // Bagian angka & titik (bisa kosong)

                        let level = "1"; // Default jika hanya huruf
                        if (numbers) {
                            let segments = numbers.split('.'); // Pecah berdasarkan titik
                            level = (segments.length + 1).toString(); // Level = jumlah segmen angka + 1
                        }

                        return { letters, numbers, level };
                    } else {
                        return { letters: "", numbers: "", level: "0" }; // Jika input tidak valid
                    }
                }

                function splitCode(kode) {
                    let match = kode.match(/^([A-Z]+)([\d\.]+)$/);
                    return match ? [match[1], match[2]] : [kode]; 
                }
                
                function populateListKode(excludeCode = null) {
                    let ajaxUrl = excludeCode ? ('<?= BASE_URL . 'v2/referensi/list-klasifikasi-all/'; ?>' + excludeCode) : '<?= BASE_URL . 'v2/referensi/list-klasifikasi-all'; ?>';
                    kodeKlasifikasi = []
                    $.ajax({
                        type: 'ajax',
                        url: ajaxUrl,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let klasifikasi = response.klasifikasi;
                            kodeKlasifikasi = klasifikasi.map(item => ({
                                id: item.id_klasifikasi,
                                text: item.kode
                            }));
                        },
                    });
                    if (!kodeKlasifikasi.some(item => item.id === '')) {
                        kodeKlasifikasi.unshift({ id: '', text: 'PILIH KODE KLASIFIKASI' });
                    }
                }

                function checkIsFilled(ids, errorMsg) {
                    let isFilled = true;
                    let elements = ids.map(id => $(`#${id}`)); 
                    let parentDiv = elements[0].closest('.form-group');

                    parentDiv.find('.error-message').remove();

                    let isEmpty = elements.some(el => !el.val());

                    if (isEmpty) {
                        if (ids.length > 1) {
                            parentDiv.append(`<small class="ms-2 text-danger ps-1 error-message">${errorMsg}</small>`);
                        } else {
                            parentDiv.append(`<small class="ms-2 text-danger ps-1 error-message">${errorMsg}</small>`);
                        }
                        setTimeout(function () {
                            parentDiv.find('.error-message').fadeOut(300, function () {
                                $(this).remove();
                            });
                        }, 3000);

                        isFilled = false;
                    }

                    return isFilled;
                }
            });
        </script>
