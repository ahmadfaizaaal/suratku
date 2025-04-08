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
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/transaksi/surat-masuk' ?>">Cetak Laporan</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Cetak Laporan Surat Masuk</h2>
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
                                </div>
                            </div>
                            <div class="card-body mb-3">
                                <!-- PUT SOME CODE HERE -->
                                <div class="form-group row d-flex align-items-center justify-content-around mb-2">
                                    <div class="col-md-3 text-end">
                                        <label for="range_tanggal" class="label-control">Pilih Rentang Waktu<span class="text-danger text-right"> *</span></label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="range_tanggal" name="range_tanggal" value="" autocomplete="off" placeholder="Tanggal Surat Diterima">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="javascript:;" data="" class="btn btn-success align-items-center rounded" id="btnShowData" title="Tampilkan Data">
                                            Tampilkan Data
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <hr class="border-secondary border-opacity-50 w-75" />
                                </div>
                                <div class="col-md-12 justify-content-center my-2">
                                    <h5 class="fw-bold text-center">DAFTAR SURAT MASUK</h5>
                                    <h5 class="fw-bold text-center"><?= strtoupper($instansi['nama_instansi']); ?></h5>
                                    <h5 class="fw-bold text-center" id="period-time"></h5>
                                </div>
                                <div class="col-md-12 d-flex justify-content-end align-items-center mb-3">
                                    <a href="javascript:;" class="btn btn-md btn-success d-inline-flex me-2" id="btnPrint">
                                        <i class="ti ti-printer"></i> &nbsp;&nbsp;Cetak Laporan
                                    </a>
                                    <!-- <a href="javascript:;" class="btn btn-md btn-primary d-inline-flex" id="btnDownload">
                                        <i class="ti ti-download"></i> &nbsp;&nbsp;Unduh
                                    </a> -->
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="4%">
                                                No.
                                            </th>
                                            <th class="text-center" width="8%">
                                                No. Agenda /
                                                <br>
                                                Kode
                                            </th>
                                            <th class="text-center" width="37%">
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
                                            <th class="text-center" width="13%">
                                                Tanggal Diterima
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataFilterSurat">
                        
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
                        <h5 class="modal-title fw-bold text-success" id="modalPdfFileLabel">LAPORAN SURAT</h5>  <!-- MODAL TITLE -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modalBody">
                        <div id="pdf-viewer"></div>
                        <!-- <iframe src="" style="width:100%; height:700px;" frameborder="0" id="pdf-viewer"></iframe> -->
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
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                const thisYear = new Date().getFullYear();
                const modalPdf = $('#modalPdfFile');
                let startDate = null;
                let endDate = null;
                let dateRange = null;
                let mainData = null;
                let tempResponse = null;
                $('#btnShowData').addClass('disabled');
                $('#btnPrint').addClass('disabled');
                $('#btnDownload').addClass('disabled');

                //DATE RANGE HANDLER
                $('#range_tanggal').daterangepicker({
                    autoApply: false,
                    locale: {
                        "format": "DD MMMM YYYY",
                        "separator": " - ",
                        "applyLabel": "Pilih",
                        "cancelLabel": "Hapus Pilihan",
                        "fromLabel": "Dari",
                        "toLabel": "Sampai",
                        "customRangeLabel": "Pilih Rentang Tanggal",
                        "weekLabel": "W",
                        "daysOfWeek": [
                            "Ming", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"
                        ],
                        "monthNames": [
                            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                        ],
                        "firstDay": 1
                    },
                    ranges: { 
                        "Hari Ini": [moment(), moment()],
                        "Minggu Ini": [moment().startOf('week'), moment().endOf('week')],
                        "Bulan Ini": [moment().startOf('month'), moment().endOf('month')],
                        "Tahun Ini": [moment().startOf('year'), moment().endOf('year')]
                    },
                    showDropdowns: true,
                    autoUpdateInput: false, // Mencegah input terisi otomatis sebelum memilih
                    alwaysShowCalendars: true, // Menampilkan kalender langsung
                    applyButtonClasses: "btn-success",
                    cancelClass: "btn-danger"
                }, function(start, end, label) {
                    startDate = start.format('YYYY-MM-DD');
                    endDate = end.format('YYYY-MM-DD');
                    let formattedRange = start.format('DD MMMM YYYY') + ' - ' + end.format('DD MMMM YYYY');
                    dateRange = formattedRange;
                    
                    $('#range_tanggal').val(formattedRange);
                    $('#period-time').text('PERIODE ' + formattedRange.toUpperCase());
                    !$('#range_tanggal').val() ? $('#btnShowData').addClass('disabled') : $('#btnShowData').removeClass('disabled');
                });

                $('#range_tanggal').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val(''); // Mengosongkan input field
                    $('#period-time').text(''); // Menghapus teks periode
                    $('#btnShowData').addClass('disabled');
                    $('#btnPrint').addClass('disabled');
                    $('#btnDownload').addClass('disabled');
                    tbodyFilterSurat.empty();

                    picker.setStartDate(moment()); 
                    picker.setEndDate(moment());
                    $(this).data('daterangepicker').updateElement();
                });
                //END OF DATE RANGE HANDLER
                
                //SHOW DATA FILTER SURAT
                const tbodyFilterSurat = $("#dataFilterSurat");
                $('#btnShowData').click(function(e) {
                    $.ajax({
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/list-by-range'; ?>',
                        type: "POST",
                        dataType: "json",
                        data: {
                            startDate: startDate,
                            endDate: endDate
                        },
                        success: function (response) {

                            // Kosongkan daftar disposisi sebelum mengisi ulang
                            tbodyFilterSurat.empty();
                            mainData = null;

                            // Tambahkan daftar disposisi eksisting
                            if (response.surat.length > 0) {
                                $('#btnPrint').removeClass('disabled')
                                $('#btnDownload').removeClass('disabled')
                                response.surat.forEach((surat, index) => {
                                    let row = `
                                        <tr>
                                            <td class="text-center seq-no">${index + 1}</td>
                                            <td class="text-center">
                                                <p class="m-1">${surat.no_agenda}</p>
                                                <hr class="border-secondary border-opacity-50 my-1" />
                                                <p class="m-1">${surat.kode}</p>
                                            </td>
                                            <td class="text-start">
                                                <p class="m-1">${surat.no_surat}</p>
                                                <hr class="border-secondary border-opacity-50 my-1" />
                                                <p class="m-1">${surat.isi}</p>
                                            </td>
                                            <td class="text-center">${surat.asal_surat ?? "-"}</td>
                                            <td class="text-center">
                                                <p class="m-1">${surat.sifat}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="m-1">${moment(surat.tgl_surat).locale("id").format("DD MMMM YYYY")}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="m-1">${moment(surat.tgl_diterima).locale("id").format("DD MMMM YYYY")}</p>
                                            </td>
                                        </tr>
                                    `;
                                    tbodyFilterSurat.append(row);
                                });
                                mainData = response.surat;
                            } else {
                                $('#btnPrint').addClass('disabled');
                                $('#btnDownload').addClass('disabled');
                                let row = `
                                        <tr>
                                            <td colspan="7" class="text-center">Data surat tidak ditemukan</td>
                                        </tr>
                                    `;
                                tbodyFilterSurat.append(row);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error("Error loading data:", error);
                        }
                    });
                });
                //END OF SHOW DATA FILTER SURAT

                //PRINT DATA HANDLER
                $('#btnPrint').click(function(e) {
                    $.ajax({
                        url: '<?= BASE_URL . 'v2/transaksi/surat-masuk/print-by-range'; ?>',
                        type: "POST",
                        dataType: "json",
                        data: {
                            startDate: startDate,
                            endDate: endDate,
                            dateRange: dateRange
                        },
                        success: function (response) {
                            tempResponse = response;
                            // console.log(startDate)
                            // $('#doc-frame').attr('src', base_theme + response);
                            let isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);                    
                            if (isMobile) {
                                let pdfFile = response; 
                                let pdfUrl = pdfFile.split('/').pop();
                                // window.open(pdfUrl, '_blank');
                                window.open('<?= BASE_URL . 'v2/transaksi/preview/print' ?>' + '?file=' + pdfUrl, '_blank');

                                setTimeout(() => {
                                    $.ajax({
                                        url: "<?= BASE_URL . 'v2/transaksi/surat-masuk/delete-temp-files' ?>",
                                        type: "POST",
                                        data: { filePath: response },
                                        success: function (res) {
                                            console.log("File temp berhasil dihapus di mobile");
                                        },
                                        error: function (err) {
                                            console.error("Gagal menghapus file di mobile:", err);
                                        }
                                    });
                                }, 3000);
                            } else {
                                let pdfUrl = response + "#zoom=page-fit&navpanes=0";
                                PDFObject.embed(pdfUrl, "#pdf-viewer");
                                modalPdf.modal('show');
            
                                setTimeout(() => {
                                    let modalHeight = $(window).height() * 0.8; // 80% dari tinggi layar
                                    $('#pdf-viewer').css('height', modalHeight + 'px');
                                    modalPdf.removeAttr('aria-hidden');
                                }, 300);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error("Error loading data:", error);
                        }
                    });
                });
                //END OF PRINT DATA HANDLER
                
                $(document).on('click', '[data-dismiss="modal"]', function () {
                    $('#modalPdfFile').modal('hide');
                });
                
                modalPdf.on('hidden.bs.modal', function() {
                    $.ajax({
                        url: "<?= BASE_URL . 'v2/transaksi/surat-masuk/delete-temp-files' ?>",
                        type: "POST",
                        data: { filePath: tempResponse },
                        success: function (res) {
                            console.log("File temp berhasil dihapus");
                        },
                        error: function (err) {
                            console.error("Gagal menghapus file:", err);
                        }
                    });
                });

            });
        </script>
