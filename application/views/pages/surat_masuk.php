        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item" aria-current="page">Persuratan</li>
                                <li class="breadcrumb-item" aria-current="page">Surat Masuk</li>
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/transaksi/surat-masuk' ?>">Daftar Surat</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Surat Masuk</h2>
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
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">DAFTAR SURAT MASUK</h6>
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
                                            <th class="text-center" width="10%">
                                                No. Agenda /
                                                <br>
                                                Kode
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Kode"></input>
                                            </th>
                                            <th class="text-center" width="30%">
                                                Hal Surat
                                                <br>
                                                <p class="text-white">-</p>
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Hal Surat"></input>
                                            </th>
                                            <th class="text-center" width="25%">
                                                Asal Surat
                                                <br>
                                                <p class="text-white">-</p>
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Asal Surat"></input>
                                            </th>
                                            <th class="text-center" width="8%">
                                                Sifat
                                                <br>
                                                <p class="text-white">-</p>
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Sifat"></input>
                                            </th>
                                            <th class="text-center" width="10%">
                                                No. Surat /
                                                <br>
                                                Tanggal Surat
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nomor"></input>
                                            </th>
                                            <th class="text-center" width="5%">
                                                File Surat
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataSuratTable">
                        
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
        

        <!-- MODAL PDF -->
        <div class="modal fade" id="modalPdfFile" tabindex="-1" role="dialog" aria-labelledby="modalPdfFileLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalPdfFileLabel">FILE SURAT</h5>  <!-- MODAL TITLE -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <div id="pdf-viewer" style="height: 100%; width: 100%;"></div>
                        <!-- <iframe id="pdf-viewer" src="" width="100%" height="600px" style="border: none;"></iframe> -->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-secondary align-items-center" data-dismiss="modal" id="btnCancel">
                            <i class="ti ti-x"></i> &nbsp;&nbsp;Tutup
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF MODAL PDF -->


        <!-- MODAL USER DETAIL -->
        <div class="modal fade" id="modalSuratDetail" tabindex="-1" role="dialog" aria-labelledby="modalSuratDetailLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl " role="document">
                <?= form_open_multipart('v2/setting/users/save-changes', 'id="form-edit-user"'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalSuratDetailLabel">INFORMASI SURAT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="id_user" value="0">
                                <input type="hidden" id="actionType" name="actionType" value="">
                                <div class="form-group row align-items-center">
                                    <label for="nomor-agenda" class="label-control col-md-3">Nomor Agenda</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="nomor-agenda" name="nomor-agenda" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="nomor-surat" class="label-control col-md-3">Nomor Surat</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="nomor-surat" name="nomor-surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="lampiran-surat" class="label-control col-md-3">Lampiran</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="lampiran-surat" name="lampiran-surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="kode-surat" class="label-control col-md-3" id="parent_label">Kode Surat</label>
                                    <div class="col-md-9">
                                        <input type="hidden" name="kode_surat" id="kode_surat" value="">
                                        <select role="presentation" id="kode-surat" class="select2 form-control form-select rounded" name="kode-surat">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center mb-4">
                                    <label for="sifat-surat" class="label-control col-md-3">Sifat Surat</label>
                                    <div class="col-md-9">
                                        <input type="hidden" name="sifat_surat" id="sifat_surat" value="">
                                        <select role="presentation" id="sifat-surat" class="select2 form-control form-select rounded" name="sifat-surat">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="asal-surat" class="label-control col-md-3">Asal Surat</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="asal-surat" name="asal-surat" value="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row align-items-center">
                                    <label for="hal-surat" class="label-control col-md-3">Hal Surat</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="hal-surat" name="hal-surat" value="" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="tanggal-surat" class="label-control col-md-3">Tanggal Surat</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="tanggal-surat" name="tanggal-surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="tanggal-diterima" class="label-control col-md-3">Tanggal Diterima</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="tanggal-diterima" name="tanggal-diterima" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="file-surat">File Surat</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev-file-surat" name="prev-file-surat" value="">
                                            <input type="file" class="dropzone-upload" name="file-surat" id="file-surat" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="disposisi-ke" class="label-control col-md-3" id="disposisi-label">Disposisi ke-</label>
                                    <div class="col-md-9">
                                        <div class="d-flex w-100 align-items-center">
                                            <input type="hidden" name="disposisi" id="disposisi" value="">
                                            <select role="presentation" id="disposisi-ke" class="select2 form-control form-select rounded me-3" name="disposisi-ke">
                                                <option></option>
                                            </select>
                                            <a href="javascript:;" data="" class="btn btn-lg btn-icon btn-success fs-7 align-items-center rounded ms-3" id="btnAddDisposition" title="Tambah Disposisi">
                                                <i class="ti ti-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="fw-bold text-success mt-3 mb-3">INFORMASI DISPOSISI</h5>
                                <hr class="border-secondary border-opacity-50 my-2 mb-0" />
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="5%">
                                                No.
                                            </th>
                                            <th class="text-center" width="20%">
                                                Dari
                                            </th>
                                            <th class="text-center" width="20%">
                                                Tujuan Disposisi
                                            </th>
                                            <th class="text-center" width="15%">
                                                Tanggal Disposisi
                                            </th>
                                            <th class="text-center" width="35%">
                                                Catatan
                                            </th>
                                            <th class="text-center" width="5%">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataDisposisi">
                        
                                    </tbody>
                                </table>
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
                const modal = $('#modalSuratDetail');
                const modalPdf = $('#modalPdfFile');
                let kodeKlasifikasi = []
                let dataPegawai = []

                loadData()
                populateListKode()
                populateListPegawai()

                var tableInstance;

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        // order: [
                        //     [6, "desc"]
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
                        },
                    });

                    return tableInstance.columns.adjust().draw(keep);
                }

                const initialLoad = (tablePage = false) => {
                    tableInstance = drawDataTables('#list-data-user', false, false, tablePage)
                }

                initialLoad()

                //DATETIME PICKER
                $('#tanggal-surat, #tanggal-diterima').datetimepicker({
                    locale: 'id',
                    format: 'DD MMMM YYYY',
                    maxDate: moment().add(0, 'days'),
                    debug: true
                });

                $('#tanggal-surat, #tanggal-diterima').on('blur', function () {
                    $(this).datetimepicker('hide');
                });
                //END OF DATETIME PICKER

                //ADD DISPOSITION HANDLER
                $('#btnAddDisposition').attr('disabled');
                
                $('#disposisi-ke').on('change', function(e) {
                    e.preventDefault();
                    !$('#disposisi-ke').val() ? $('#btnAddDisposition').addClass('disabled') : $('#btnAddDisposition').removeClass('disabled');
                });
                
                const tbodyDisposition = $("#dataDisposisi");
                $('#btnAddDisposition').click(function(e) {
                    let today = moment();
                    let selectedData = $('#disposisi-ke').select2('data')[0];
                    let tujuanDisposisi = selectedData.text;
                    let isExist = false;
                    tbodyDisposition.find('tr').each(function() {
                        let existingTujuan = $(this).find("td:nth-child(3)").text().trim(); // Ambil teks dari kolom Tujuan Disposisi
                        if (existingTujuan === tujuanDisposisi) {
                            isExist = true;
                            return false; // Hentikan loop jika sudah ditemukan
                        }
                    });
                    if (isExist) {
                        return;
                    }
                    let row = `
                        <tr>
                            <td class="text-center seq-no"></td>
                            <td class="text-center">${ '<?= $this->session->userdata('nama'); ?>' }</td>
                            <td class="text-center">${ tujuanDisposisi }</td>
                            <td class="text-center">${ today.format("DD MMMM YYYY") }</td>
                            <td>
                                <input type="text" class="form-control catatan-disposisi" name="catatan_disposisi[]" value="" autocomplete="off">
                            </td>
                            <td class="text-center">
                                <a href="javascript:;" class="btn btn-icon btn-danger delete-dispo fs-7" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Disposisi">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>
                    `;
                    tbodyDisposition.append(row);
                    updateSequenceNumbers();
                    $('#disposisi-ke').val(null).trigger('change');
                });
                
                tbodyDisposition.on('click', '.delete-dispo', function() {
                    // $(this).closest('tr').remove();
                    // updateSequenceNumbers();
                    let row = $(this).closest("tr");
                    let disposisiId = $(this).attr("data-id");

                    if (disposisiId) {
                        row.hide().addClass("deleted"); // Data dari server, sembunyikan dulu sebelum submit
                    } else {
                        row.remove();
                    }

                    updateSequenceNumbers();
                });
                //END OF ADD DISPOSITION HANDLER

                //ADD DATA HANDLER
                $('#btnAdd').click(function(e) {
                    e.preventDefault();

                    // populateListKode();
                    // populateListPegawai();
                    initialLoadSelectElement();
                    
                    validateNIP();
                    // $('#kode-surat').empty().select2({
                    //     theme: 'bootstrap-5',
                    //     width: '100%',
                    //     placeholder: 'Tampilkan Data Kode',
                    //     allowClear: true,
                    //     dropdownParent: modal,
                    //     data: kodeKlasifikasi,
                    //     language: {
                    //         noResults: function(params) {
                    //             return "Kode tidak ditemukan!";
                    //         },
                    //         searching: function(params) {
                    //             return "Mencari...";
                    //         },
                    //         inputTooShort: function(params) {
                    //             var x = params.minimum - params.input.length;
                    //             return "Masukkan " + x + " karakter lagi";
                    //         }
                    //     },
                    // });

                    // $('#sifat-surat').empty().select2({
                    //     theme: 'bootstrap-5',
                    //     width: '100%',
                    //     placeholder: 'Tampilkan Data Sifat',
                    //     allowClear: true,
                    //     dropdownParent: modal,
                    //     data: [
                    //         { id: "Biasa", text: "Biasa" },
                    //         { id: "Segera", text: "Segera" },
                    //         { id: "Penting", text: "Penting" },
                    //         { id: "Rahasia", text: "Rahasia" }
                    //     ],
                    //     language: {
                    //         noResults: function(params) {
                    //             return "Sifat surat tidak ditemukan!";
                    //         },
                    //         searching: function(params) {
                    //             return "Mencari...";
                    //         },
                    //         inputTooShort: function(params) {
                    //             var x = params.minimum - params.input.length;
                    //             return "Masukkan " + x + " karakter lagi";
                    //         }
                    //     },
                    // });

                    // $('#disposisi-ke').empty().select2({
                    //     theme: 'bootstrap-5',
                    //     width: '100%',
                    //     placeholder: 'Tampilkan Data Pegawai',
                    //     allowClear: true,
                    //     dropdownParent: modal,
                    //     data: dataPegawai,
                    //     language: {
                    //         noResults: function(params) {
                    //             return "Pegawai tidak ditemukan!";
                    //         },
                    //         searching: function(params) {
                    //             return "Mencari...";
                    //         },
                    //         inputTooShort: function(params) {
                    //             var x = params.minimum - params.input.length;
                    //             return "Masukkan " + x + " karakter lagi";
                    //         }
                    //     },
                    // });
                    
                    $('#sifat-surat').val(null).trigger('change');
                    $('#disposisi-ke').val(null).trigger('change');
                    $('input[name=actionType]').val('add');

                    modal.find('.modal-title').text('TAMBAH DATA SURAT MASUK');
                    modal.modal('show');
                    modal.on('shown.bs.modal', function () {
                        $('#nomor-agenda').focus();
                    });
                });
                //END OF ADD DATA HANDLER

                //EDIT DATA HANDLER
                $('#dataSuratTable').on('click', '.view-detail', function() {
                    var suratId = $(this).attr('data');

                    modal.find('.modal-title').text('UBAH DATA SURAT MASUK');
                    modal.modal('show');
                    validateNIP();

                    loadEditData(suratId);

                    setTimeout(() => {
                        modal.removeAttr('aria-hidden');
                    }, 300);
                });
                
                $(document).on('click', '[data-dismiss="modal"]', function () {
                    $('#modalSuratDetail, #modalPdfFile').modal('hide');
                });
                //END OF EDIT DATA HANDLER

                //DELETE DATA HANDLER
                $('#dataSuratTable').on('click', '.delete-data', function() {
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

                //VIEW PDF FILE HANDLER
                $('.view-pdf').click(function () {
                    let pdfUrl = $(this).closest('tr').data('file'); 
                    console.log(pdfUrl)
                    PDFObject.embed(pdfUrl, "#pdf-viewer");
                    modalPdf.modal('show');

                    setTimeout(() => {
                        modalPdf.removeAttr('aria-hidden');
                    }, 300);
                });
                //END OF VIEW PDF FILE HANDLER

                $("#status").change(function () {
                    let statusValue = $(this).is(":checked") ? 1 : 0;
                    $('input[name=status_choosen]').val(statusValue);
                    $('#statusLabel').text(statusValue == 1 ? "Aktif" : "Non Aktif");
                });

                function loadData() {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/list'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            const tbody = $("#dataSuratTable"); // Target tbody
                            tbody.empty(); // Kosongkan tbody sebelum memasukkan data baru

                            $.each(response.surat, function(index, surat) {
                                const btnColor = { "Biasa": "success", "Segera": "primary", "Penting": "warning", "Rahasia": "danger" }
                                let formatTanggal = moment(surat.tgl_surat).locale("id").format("DD MMMM YYYY");

                                var row = `
                                    <tr data-file="<?= BASE_THEME . 'uploads/docs/surat-masuk/' ?>${surat.file}">
                                        <td class="text-center">
                                            <a href="javascript:;" data="${surat.id_surat}" class="btn btn-sm btn-success view-detail fs-7 me-2" data-toggle="modal" data-target="#modalSuratDetail">
                                                <i class="ti ti-pencil"></i> Ubah
                                            </a>
                                            <a href="javascript:;" data="${surat.id_surat}" class="btn btn-sm btn-danger delete-data fs-7">
                                                <i class="ti ti-trash"></i> Hapus
                                            </a>
                                        </td>
                                        <td class="text-center py-0">
                                            <p class="m-0">${surat.no_agenda}</p>
                                            <hr class="border-secondary border-opacity-50 my-1" />
                                            <span class="badge bg-light-dark fw-bold">${surat.kode}</span>
                                        </td>
                                        <td>${surat.isi}</td>
                                        <td>${surat.asal_surat ?? "-"}</td>
                                        <td class="text-center">
                                            <span class="badge text-bg-${ btnColor[surat.sifat] ?? 'secondary' } fs-7">${surat.sifat ?? 'Data Kosong'}</span>
                                        </td>
                                        <td class="py-0">
                                            <p class="m-0 fw-bold">${surat.no_surat}</p>
                                            <hr class="border-secondary border-opacity-50 my-1" />
                                            ${formatTanggal}
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:;" data="${surat.file}" class="btn btn-icon btn-primary view-pdf fs-7" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lihat File">
                                                <i class="ti ti-file-text"></i>
                                            </a>
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

                function loadEditData(suratId) {
                    // populateListKode();
                    // populateListPegawai();
                    initialLoadSelectElement();

                    $.ajax({
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/detail/'; ?>' + suratId,
                        type: "POST",
                        dataType: "json",
                        success: function (response) {
                            let existsKode = kodeKlasifikasi.some(item => item.text == response.surat.kode)
                            
                            $("#nomor-agenda").val(response.surat.no_agenda);
                            $("#nomor-surat").val(response.surat.no_surat);
                            $("#lampiran-surat").val(response.surat.lampiran);
                            setTimeout(() => {
                                $('#kode-surat').val(existsKode ? response.surat.kode : null).trigger('change');
                                $('#sifat-surat').val(response.surat.sifat ?? null).trigger('change');
                            }, 200);
                            $("#asal-surat").val(response.surat.asal_surat);
                            $("#hal-surat").val(response.surat.isi);
                            $("#tanggal-surat").val(moment(response.surat.tgl_surat).format("DD MMMM YYYY"));
                            $("#tanggal-diterima").val(moment(response.surat.tgl_diterima).format("DD MMMM YYYY"));

                            // Kosongkan daftar disposisi sebelum mengisi ulang
                            tbodyDisposition.empty();

                            // Tambahkan daftar disposisi eksisting
                            response.disposisi.forEach((item, index) => {
                                let row = `
                                    <tr>
                                        <td class="text-center seq-no">${index + 1}</td>
                                        <td>${item.disposed_by}</td>
                                        <td>${item.disposed_to}</td>
                                        <td>${moment(item.tgl_disposisi).format("DD MMMM YYYY")}</td>
                                        <td>
                                            <input type="text" class="form-control catatan-disposisi" name="catatan_disposisi[]" value="${item.catatan}" autocomplete="off">
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:;" data-id="${item.id_disposisi}" class="btn btn-icon btn-danger delete-dispo fs-7" data-bs-toggle="tooltip" title="Hapus Disposisi">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                `;
                                tbodyDisposition.append(row);
                            });

                            updateSequenceNumbers();
                            
                        },
                        error: function (xhr, status, error) {
                            console.error("Error loading data:", error);
                        }
                    });
                }

                function updateSequenceNumbers() {
                    tbodyDisposition.find('tr').each(function(index) {
                        $(this).find('.seq-no').text(index + 1); // Menambahkan nomor urut sesuai indeks (mulai dari 1)
                    });
                }

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

                function initialLoadSelectElement() {
                    $('#kode-surat').empty().select2({
                        theme: 'bootstrap-5',
                        width: '100%',
                        placeholder: 'Tampilkan Data Kode',
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

                    $('#sifat-surat').empty().select2({
                        theme: 'bootstrap-5',
                        width: '100%',
                        placeholder: 'Tampilkan Data Sifat',
                        allowClear: true,
                        dropdownParent: modal,
                        data: [
                            { id: "Biasa", text: "Biasa" },
                            { id: "Segera", text: "Segera" },
                            { id: "Penting", text: "Penting" },
                            { id: "Rahasia", text: "Rahasia" }
                        ],
                        language: {
                            noResults: function(params) {
                                return "Sifat surat tidak ditemukan!";
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

                    $('#disposisi-ke').empty().select2({
                        theme: 'bootstrap-5',
                        width: '100%',
                        placeholder: 'Tampilkan Data Pegawai',
                        allowClear: true,
                        dropdownParent: modal,
                        data: dataPegawai,
                        language: {
                            noResults: function(params) {
                                return "Pegawai tidak ditemukan!";
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
                                id: item.kode,
                                text: item.kode
                            }));
                        },
                    });
                    if (!kodeKlasifikasi.some(item => item.id === '')) {
                        kodeKlasifikasi.unshift({ id: '', text: 'Tampilkan Data Kode' });
                    }
                }

                function populateListPegawai() {
                    dataPegawai = []
                    $.ajax({
                        type: 'ajax',
                        url: '<?= BASE_URL . 'v2/transaksi/list-pegawai'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let pegawai = response.pegawai;
                            dataPegawai = pegawai.map(item => ({
                                id: item.id_user,
                                text: item.nama
                            }));
                        },
                    });
                    if (!dataPegawai.some(item => item.id === '')) {
                        dataPegawai.unshift({ id: '', text: 'Tampilkan Data Pegawai' });
                    }
                }

            });
        </script>
