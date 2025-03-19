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
                                    <div class="m-0 w-25" >
                                        <select role="presentation" id="tahun_surat" class="select2 form-control form-select rounded" name="tahun_surat" style="max-width: 200px; width: 100%;">
                                            <option></option>
                                        </select>
                                    </div>
                                    <a href="javascript:;" data="" class="btn d-inline-flex btn-success fs-6 align-items-center justify-content-center" id="btnAdd">
                                        <i class="ti ti-plus me-1"></i> Tambah Data
                                    </a>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <!-- PUT SOME CODE HERE -->
                                <table class="table table-bordered adjust-table" width="100%" id="list-data-surat">
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
                        <div id="pdf-viewer"></div>
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


        <!-- MODAL SURAT DETAIL -->
        <div class="modal fade" id="modalSuratDetail" tabindex="-1" role="dialog" aria-labelledby="modalSuratDetailLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl " role="document">
                <?= form_open_multipart('v2/transaksi/surat-masuk/save-changes', 'id="form-edit-surat"'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalSuratDetailLabel">INFORMASI SURAT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="id_surat" value="">
                                <input type="hidden" id="actionType" name="actionType" value="">
                                <div class="form-group row align-items-center">
                                    <label for="nomor_agenda" class="label-control col-md-4">Nomor Agenda<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="nomor_agenda" name="nomor_agenda" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="nomor_surat" class="label-control col-md-4">Nomor Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="lampiran_surat" class="label-control col-md-4">Lampiran</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="lampiran_surat" name="lampiran_surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="kode_surat" class="label-control col-md-4" id="parent_label">Kode Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="hidden" name="kode_surat_hidden" id="kode_surat_hidden" value="">
                                        <select role="presentation" id="kode_surat" class="select2 form-control form-select rounded" name="kode_surat">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center mb-4">
                                    <label for="sifat_surat" class="label-control col-md-4">Sifat Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="hidden" name="sifat_surat_hidden" id="sifat_surat_hidden" value="">
                                        <select role="presentation" id="sifat_surat" class="select2 form-control form-select rounded" name="sifat_surat">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="asal_surat" class="label-control col-md-4">Asal Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="asal_surat" name="asal_surat" value="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row align-items-center">
                                    <label for="hal_surat" class="label-control col-md-4">Hal Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="hal_surat" name="hal_surat" value="" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="tanggal_surat" class="label-control col-md-4">Tanggal Surat<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="tanggal_surat" name="tanggal_surat" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="tanggal_diterima" class="label-control col-md-4">Tanggal Diterima<span class="text-danger"> *</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="tanggal_diterima" name="tanggal_diterima" value="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-4 label-control" for="file_surat" id="file_surat_label">File Surat</label>
                                    <div class="col-md-8">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_file_surat" name="prev_file_surat" value="">
                                            <input type="file" class="dropzone-upload" name="file_surat" id="file_surat" accept="application/pdf">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="disposisi_ke" class="label-control col-md-4" id="disposisi-label">Disposisi ke-</label>
                                    <div class="col-md-8">
                                        <div class="d-flex w-100 align-items-center">
                                            <input type="hidden" name="disposisi" id="disposisi" value="">
                                            <select role="presentation" id="disposisi_ke" class="select2 form-control form-select rounded me-3" name="disposisi_ke">
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
                const thisYear = new Date().getFullYear();
                let kodeKlasifikasi = []
                let dataPegawai = []
                let listTahun = []

                loadData('2025')
                populateListYear()
                populateListKode()
                populateListPegawai()

                var tableInstance;

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    if ($.fn.DataTable.isDataTable(id)) {
                        $(id).DataTable().clear().destroy(); // Hancurkan DataTable yang sudah ada
                        $(id + " tbody").empty(); // Kosongkan hanya isi tbody, jangan hapus tabel
                    }
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        order: [
                            [5, "desc"],
                            [1, "desc"]
                        ],
                        ordering: true,
                        "columnDefs": [
                            { "type": "num", "targets": 1 },  // Kolom ke-1 dianggap sebagai angka
                            { "type": "date", "targets": 5 }  // Kolom ke-5 dianggap sebagai tanggal
                        ],
                        pageLength: 50,
                        paging: true, // Pastikan pagination aktif
                        lengthMenu: [5, 10, 25, 50, 100], // Pilihan jumlah data per halaman
                        //deferRender: true, // Render hanya saat data muncul di layar
                        //processing: true,
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
                    tableInstance = drawDataTables('#list-data-surat', false, false, tablePage)
                }

                initialLoad()

                listTahun.unshift({ id: 'all', text: 'Semua Tahun' });
                $('#tahun_surat').empty().select2({
                    theme: 'bootstrap-5',
                    width: '100%',
                    placeholder: 'Pilih Tahun Surat Masuk',
                    allowClear: true,
                    data: listTahun,
                    language: {
                        noResults: function(params) {
                            return "Tahun tidak ditemukan!";
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
                $('#tahun_surat').val(null).trigger('change');
                $('#tahun_surat').on('change', function() {
                    let tahun = $('#tahun_surat').select2('data');
                    loadData(tahun[0].id)
                });

                //DATETIME PICKER
                $('#tanggal_surat, #tanggal_diterima').datetimepicker({
                    locale: 'id',
                    format: 'DD MMMM YYYY',
                    maxDate: moment().add(0, 'days'),
                    debug: true
                });

                $('#tanggal_surat, #tanggal_diterima').on('blur', function () {
                    $(this).datetimepicker('hide');
                });
                //END OF DATETIME PICKER

                //CLOSE MODAL HANDLER
                modal.on('hidden.bs.modal', function() {
                    const action = $('#actionType').val()
                    if (!$('#form-edit-surat').data('submitted')) {
                        if (action && action === 'edit') {
                            this.querySelectorAll("input[type='text'], input[type='hidden'], textarea").forEach(input => {
                                input.value = "";
                            });
                            $("#dataDisposisi").empty();
                        }
                    }
                    $('#form-edit-surat').removeData('submitted');
                });
                //END OF CLOSE MODAL HANDLER

                //ADD DISPOSITION HANDLER
                $('#btnAddDisposition').addClass('disabled');
                
                $('#disposisi_ke').on('change', function(e) {
                    e.preventDefault();
                    !$('#disposisi_ke').val() ? $('#btnAddDisposition').addClass('disabled') : $('#btnAddDisposition').removeClass('disabled');
                });
                
                const tbodyDisposition = $("#dataDisposisi");
                $('#btnAddDisposition').click(function(e) {
                    let today = moment();
                    let selectedData = $('#disposisi_ke').select2('data')[0];
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
                    $('#disposisi_ke').val(null).trigger('change');
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

                    initialLoadSelectElement();
                    validateNumber();
                    validateNomorSurat();
                    
                    $('#sifat_surat').val(null).trigger('change');
                    $('#disposisi_ke').val(null).trigger('change');
                    $('#file_surat_label').append('<span class="text-danger" id="file_attr"> *</span>');
                    $('input[name=actionType]').val('add');

                    modal.find('.modal-title').text('TAMBAH DATA SURAT MASUK');
                    modal.modal('show');
                    modal.on('shown.bs.modal', function () {
                        $('#nomor_agenda').focus();
                    });
                });
                //END OF ADD DATA HANDLER

                //EDIT DATA HANDLER
                $('#dataSuratTable').on('click', '.view-detail', function() {
                    var suratId = $(this).attr('data');
                    
                    initialLoadSelectElement();
                    validateNumber();
                    validateNomorSurat();
                    loadEditData(suratId);
                    
                    $('#file_attr').remove();
                    $('input[name=actionType]').val('edit'); 
                    modal.find('.modal-title').text('UBAH DATA SURAT MASUK');
                    modal.modal('show');

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
                // $('.view-pdf').click(function () {
                $(document).on('click', '.view-pdf', function() {
                    let pdfUrl = $(this).closest('tr').data('file') + "#zoom=page-fit&navpanes=0"; 
                    PDFObject.embed(pdfUrl, "#pdf-viewer");
                    modalPdf.modal('show');

                    setTimeout(() => {
                        let modalHeight = $(window).height() * 0.8; // 80% dari tinggi layar
                        $('#pdf-viewer').css('height', modalHeight + 'px');
                        modalPdf.removeAttr('aria-hidden');
                    }, 300);
                });
                //END OF VIEW PDF FILE HANDLER

                function loadData(tahun = null) {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/list/'; ?>' + tahun,
                        async: true,
                        dataType: 'json',
                        success: function(response) {
                            // console.log(response.surat)
                            if ($.fn.DataTable.isDataTable("#list-data-surat")) {
                                $("#list-data-surat").DataTable().clear().destroy();
                                $("#list-data-surat tbody").empty(); // Kosongkan isi tabel
                            }

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
                                        <td class="text-center py-0" data-order="${surat.no_agenda}">
                                            <p class="m-0">${surat.no_agenda}</p>
                                            <hr class="border-secondary border-opacity-50 my-1" />
                                            <span class="badge bg-light-dark fw-bold">${surat.kode}</span>
                                        </td>
                                        <td>${surat.isi}</td>
                                        <td>${surat.asal_surat ?? "-"}</td>
                                        <td class="text-center">
                                            <span class="badge text-bg-${ btnColor[surat.sifat] ?? 'secondary' } fs-7">${surat.sifat ?? 'Data Kosong'}</span>
                                        </td>
                                        <td class="py-0" data-order="${surat.tgl_diterima}">
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

                            drawDataTables("#list-data-surat", false, false, false);
                        },
                        error: function() {
                            swal("Error!", "Could not get Data from Database!", "error");
                        }
                    });
                }

                $('#btnSave').click(function(e) {
                    e.preventDefault();

                    const action = $('#actionType').val()
                    
                    let nomorAgenda = checkIsFilled('nomor_agenda', 'Nomor Agenda tidak boleh kosong!');
                    let nomorSurat = checkIsFilled('nomor_surat', 'Nomor Surat tidak boleh kosong!');
                    let kodeSurat = checkIsFilled('kode_surat', 'Kode Surat tidak boleh kosong!');
                    let sifatSurat = checkIsFilled('sifat_surat', 'Sifat Surat tidak boleh kosong!');
                    let asalSurat = checkIsFilled('asal_surat', 'Asal Surat tidak boleh kosong!');
                    let halSurat = checkIsFilled('hal_surat', 'Hal Surat tidak boleh kosong!');
                    let tanggalSurat = checkIsFilled('tanggal_surat', 'Tanggal Surat tidak boleh kosong!');
                    let tanggalDiterima = checkIsFilled('tanggal_diterima', 'Tanggal Diterima tidak boleh kosong!');
                    let fileSurat = true;
                    if (action && action === 'add') {
                        fileSurat = checkIsFilled('file_surat', 'File Surat tidak boleh kosong!');
                    }

                    if (nomorAgenda && nomorSurat && kodeSurat && sifatSurat && asalSurat && halSurat && tanggalSurat && tanggalDiterima && fileSurat) {
                        $("#form-edit-surat").data('submitted', true);

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
                                
                                let formData = new FormData($("#form-edit-surat")[0]);

                                let disposisiData = [];
                                let deletedDispositions = [];

                                // Ambil data disposisi yang masih aktif (tidak tersembunyi)
                                $("#dataDisposisi").find("tr:not(.deleted)").each(function () {
                                    let dari = $(this).find("td:nth-child(2)").text().trim(); // Kolom 'Dari'
                                    let tujuan = $(this).find("td:nth-child(3)").text().trim(); // Kolom 'Tujuan Disposisi'
                                    let tanggalDisposisi = $(this).find("td:nth-child(4)").text().trim(); // Kolom 'Tanggal Disposisi'
                                    let catatan = $(this).find(".catatan-disposisi").val(); // Input catatan

                                    // Format tanggal menggunakan Moment.js
                                    let formattedDate = formatDateWithMoment(tanggalDisposisi);

                                    // Push data ke array
                                    disposisiData.push({
                                        disposed_by: dari,
                                        disposed_to: tujuan,
                                        tgl_disposisi: formattedDate,
                                        catatan: catatan
                                    });
                                });

                                // Ambil ID disposisi yang dihapus
                                $("#dataDisposisi").find("tr.deleted").each(function () {
                                    let disposisiId = $(this).find(".delete-dispo").attr("data-id");
                                    if (disposisiId) {
                                        deletedDispositions.push(disposisiId);
                                    }
                                });

                                // Ubah format tanggal sebelum dikirim ke server
                                let tanggalSurat = formatDateWithMoment($("#tanggal_surat").val());
                                let tanggalDiterima = formatDateWithMoment($("#tanggal_diterima").val());

                                // Tambahkan data tanggal yang sudah diformat
                                formData.set("tgl_surat", tanggalSurat);
                                formData.set("tgl_diterima", tanggalDiterima);

                                // Tambahkan disposisi baru ke FormData
                                formData.append("disposisi", JSON.stringify(disposisiData));
                                formData.append("deleted_disposisi", JSON.stringify(deletedDispositions));

                                console.log(formData)

                                $.ajax({
                                    type: 'ajax',
                                    url: $("#form-edit-surat").attr('action'),
                                    method: $("#form-edit-surat").attr('method'), 
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
                                                window.location.href = '<?= BASE_URL . 'v2/transaksi/surat-masuk' ?>'; 
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

                function loadEditData(suratId) {
                    $.ajax({
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/detail/'; ?>' + suratId,
                        type: "POST",
                        dataType: "json",
                        success: function (response) {
                            let existsKode = kodeKlasifikasi.some(item => item.text == response.surat.kode)
                            
                            $("#id_surat").val(response.surat.id_surat);
                            $("#nomor_agenda").val(response.surat.no_agenda);
                            $("#nomor_surat").val(response.surat.no_surat);
                            $("#lampiran_surat").val(response.surat.lampiran);
                            setTimeout(() => {
                                $('#kode_surat').val(existsKode ? response.surat.kode : null).trigger('change');
                                $('#sifat_surat').val(response.surat.sifat ?? null).trigger('change');
                            }, 100);
                            $("#asal_surat").val(response.surat.asal_surat);
                            $("#hal_surat").val(response.surat.isi);
                            $("#tanggal_surat").val(moment(response.surat.tgl_surat).format("DD MMMM YYYY"));
                            $("#tanggal_diterima").val(moment(response.surat.tgl_diterima).format("DD MMMM YYYY"));
                            $("#prev_file_surat").val(response.surat.file);

                            // Kosongkan daftar disposisi sebelum mengisi ulang
                            tbodyDisposition.empty();

                            // Tambahkan daftar disposisi eksisting
                            response.disposisi.forEach((item, index) => {
                                let row = `
                                    <tr>
                                        <td class="text-center seq-no">${index + 1}</td>
                                        <td class="text-center">${item.disposed_by}</td>
                                        <td class="text-center">${item.disposed_to}</td>
                                        <td class="text-center">${moment(item.tgl_disposisi).format("DD MMMM YYYY")}</td>
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

                    $(`#${id}_error`).remove();

                    if (!element.val()) {
                        let errorElement = `<small class="text-danger ps-1" id="${id}_error">${errorMsg}</small>`;
                        if (element.hasClass('select2-hidden-accessible')) {
                            element.next('.select2').after(errorElement); // Tambahkan setelah elemen tampilan Select2
                        } else {
                            element.after(errorElement);
                        }
                        // element.after(`<small class="text-danger ps-1" id="${id}_error">${errorMsg}</small>`);
                        setTimeout(function () {
                            $(`#${id}_error`).fadeOut(300, function () {
                                $(this).remove(); // Hapus setelah animasi selesai
                            });
                        }, 2000);
                        isFilled = false;
                    }
                    return isFilled;
                }

                function validateNomorSurat() {
                    $('#nomor_surat').on('keypress', function(e) {
                        var regex = new RegExp("^[a-zA-Z0-9\-./]+$"); // Hanya huruf, angka, -, ., /
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        
                        // Karakter pertama harus huruf atau angka
                        if ($(this).val().length === 0 && !/^[a-zA-Z0-9]$/.test(str)) {
                            e.preventDefault();
                            return false;
                        }
                        
                        if (!regex.test(str)) {
                            e.preventDefault();
                            return false;
                        }
                    });

                    $('#nomor_surat').on('paste', function(e) {
                        e.preventDefault();
                        var pasteData = (e.originalEvent.clipboardData || window.clipboardData).getData('text');
                        var regex = /^[a-zA-Z0-9\-./]+$/; // Hanya huruf, angka, -, ., /
                        
                        if (!regex.test(pasteData)) {
                            alert('Input mengandung karakter yang tidak diizinkan!');
                            return false;
                        }
                        
                        // Bersihkan karakter yang tidak diizinkan sebelum menempelkan teks
                        var sanitizedData = pasteData.replace(/[^a-zA-Z0-9\-./]/g, '');
                        $(this).val(sanitizedData);
                    });
                }

                function validateNumber() {
                    $('#nomor_agenda').on('keypress', function(e) {
                        var regex = new RegExp("^[0-9]+$"); // Hanya angka 0-9
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        
                        if (!regex.test(str)) {
                            e.preventDefault();
                            return false;
                        }
                    });

                    $('#nomor_agenda').on('paste', function(e) {
                        e.preventDefault();
                        var pasteData = (e.originalEvent.clipboardData || window.clipboardData).getData('text');
                        var regex = /^[0-9]+$/; // Hanya angka 0-9
                        
                        if (!regex.test(pasteData)) {
                            alert('Input hanya boleh berisi angka!');
                            return false;
                        }
                        
                        // Bersihkan karakter yang tidak diizinkan sebelum menempelkan teks
                        var sanitizedData = pasteData.replace(/[^0-9]/g, '');
                        $(this).val(sanitizedData);
                    });
                }

                function initialLoadSelectElement() {
                    $('#kode_surat').empty().select2({
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

                    $('#sifat_surat').empty().select2({
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

                    $('#disposisi_ke').empty().select2({
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

                function populateListYear() {
                    $.ajax({
                        type: 'post',
                        url: base_url + 'v2/populate-list-tahun/',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let tahun = response.listTahun;
                            listTahun = tahun.map(item => ({
                                id: item.tahun,
                                text: item.tahun
                            }));
                        },
                        error: function() {
                            swal("Internal Server Error 500!", "Error!", "error");
                        }
                    });
                }

                function populateListKode(excludeCode = null) {
                    let ajaxUrl = '<?= BASE_URL . 'v2/referensi/list-klasifikasi-all/0000'; ?>';
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

                function formatDateWithMoment(dateString) {
                    if (!dateString) return "0000-00-00 00:00:00";

                    moment.locale('id'); // Pastikan moment.js menggunakan locale Indonesia
                    let date = moment(dateString, "DD MMMM YYYY", true); // Tambahkan true untuk strict parsing

                    if (date.isValid()) {
                        return date.format("YYYY-MM-DD 00:00:00");
                    }

                    return "0000-00-00 00:00:00"; // Jika tidak valid, kembalikan default
                }

            });
        </script>
