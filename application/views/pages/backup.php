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
                                <li class="breadcrumb-item" aria-current="page">Manajemen Data</li>
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/setting/users' ?>">Pencadangan</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Pencadangan</h2>
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
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">DAFTAR TABEL DATABASE </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <!-- PUT SOME CODE HERE -->
                                <table class="table table-bordered adjust-table" width="100%" id="list-data-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-middle" width="10%">
                                                Pilih Tabel
                                            </th>
                                            <th class="text-center" width="75%">
                                                Nama Tabel
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Nama Tabel"></input>
                                            </th>
                                            <th class="text-center" width="15%">
                                                Jumlah Baris Data
                                                <input role="presentation" autocomplete="off" oninput="event.stopPropagation()" onclick="event.stopPropagation()" type="text" class="mt-3 form-control form-control-sm"  placeholder="Cari Jumlah Data"></input>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataTable">
                        
                                    </tbody>
                                </table>
                                <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                    <!-- SOME CODE FROM JQUERY -->
                                    <div class="d-flex justify-content-end align-items-center mb-2 me-2" id="divBackupAll">
                                        <a href="javascript:;" class="btn btn-success btn-md d-flex align-items-center justify-content-center" id="btnBackup">
                                            <i class="ti ti-database-export"></i>
                                            &nbsp;&nbsp;<span>Cadangkan Semua</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF MAIN CONTENT -->
            </div>
        </div>
        <!-- END OF MAIN SECTION -->


        <!-- MODAL USER DETAIL -->
        <div class="modal fade" id="modalOtpConfirmation" tabindex="-1" role="dialog" aria-labelledby="modalOtpConfirmationLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <?= form_open_multipart('v2/setting/users/save-changes', 'id="form-edit-user"'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-success" id="modalOtpConfirmationLabel">KODE KEAMANAN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body align-items-center justify-content-center">
                        <h6 class="text-center">Masukkan kode keamanan untuk melakukan pencadangan dan pemulihan data.</h6>
                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                            <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" autocomplete="off" />
                            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" autocomplete="off" />
                            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" autocomplete="off" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" autocomplete="off" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" autocomplete="off" />
                            <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" autocomplete="off" />
                        </div>
                    </div>
                    <div class="modal-footer align-items-center justify-content-center">
                        <a href="javascript:;" class="btn btn-success align-items-center justify-content-center" id="btnValidate">
                            <i class="ti ti-shield-check"></i> &nbsp;&nbsp;Validasi
                        </a>
                        <a href="javascript:;" class="btn btn-secondary align-items-center justify-content-center" data-dismiss="modal" id="btnCancel">
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
                const modal = $('#modalOtpConfirmation');
                let selectedTable = [];
                var tableInstance;

                loadData()

                function drawDataTables(id = '', keep = false, reinitialize = false, page = false) {
                    tableInstance = $(document).find(id).DataTable({
                        scrollX: true,
                        order: [
                            [2, "desc"]
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
                    tableInstance = drawDataTables('#list-data-table', false, false, tablePage)
                }

                initialLoad()

                //CHOOSE TABLE HANDLER
                let $backupButton = $("#btnBackup");
                let clearSelectionButton = $(`<a href="javascript:;" class="btn btn-danger btn-md d-flex align-items-center justify-content-center me-2" id="btnClear"><i class="ti ti-trash"></i>&nbsp;&nbsp;Hapus Pilihan</a>`);

                $(document).on('change', '.choose-table', function(e) {
                    if ($(".choose-table:checked").length > 0) {
                        $backupButton.find("span").text("Cadangkan");

                        if ($("#btnClear").length === 0) {
                            $backupButton.before(clearSelectionButton);
                        }
                    } else {
                        $backupButton.find("span").text("Cadangkan Semua");
                        $("#btnClear").remove();
                    }
                });

                $(document).on("click", "#btnClear", function (e) {
                    e.preventDefault();
                    $(".choose-table").prop("checked", false).trigger("change");
                });
                //END OF CHOOSE TABLE HANDLER


                //OPEN MODAL OTP HANDLER
                $(document).on("click", "#btnBackup", function (e) {
                    e.preventDefault(); // Hindari reload halaman
                    
                    selectedTables = $(".choose-table:checked").map(function () {
                        return $(this).val();
                    }).get();
                    
                    modal.modal('show');
                    modal.on("shown.bs.modal", function () {
                        $("#first").focus();
                    });
                    
                    setTimeout(() => {
                        modal.removeAttr('aria-hidden');
                    }, 300);
                });

                $(document).on('click', '[data-dismiss="modal"]', function () {
                    $('#modalOtpConfirmation').modal('hide');
                });
                //END OF OPEN MODAL OTP HANDLER


                //SECURITY CODE
                $(document).on("click", "#btnValidate", function (e) {
                    e.preventDefault();
                    // let otp = '';
                    // document.querySelectorAll('#otp > input').forEach(input => otp += input.value);
                    if (!checkOtpFilled("Kode keamanan harus diisi!")) {
                        return;
                    }

                    let otp = '';
                    $("#otp input").each(function () {
                        otp += $(this).val();
                    });

                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/setting/app/backup/validate-otp'; ?>',
                        async: false,
                        data: { otp: otp },
                        dataType: 'json',
                        success: function(response) {
                            if (response.valid) {
                                modal.modal('hide');
                                swal({
                                    title: 'Berhasil!',
                                    text: response.message,
                                    type: 'success',
                                    confirmButtonColor: '#2ba87e',
                                    confirmButtonText: 'Oke'
                                }).then(() => {
                                    let backupUrl = selectedTables.length > 0 
                                        ? "<?= BASE_URL . 'v2/setting/app/backup/exec-partial'; ?>?tables=" + selectedTables.join(",") 
                                        : "<?= BASE_URL . 'v2/setting/app/backup/exec-all'; ?>";

                                    window.location.href = backupUrl; 
                                });
                            } else {
                                swal({
                                    title: 'Error!',
                                    text: response.message,
                                    type: 'error',
                                    confirmButtonColor: '#dc2625',
                                    confirmButtonText: 'Oke'
                                });
                            }
                        },
                        error: function() {
                            swal("Error!", "Could not get Data from Database!", "error");
                        }
                    });
                });
                //END OF SECURITY CODE

                function loadData() {
                    $.ajax({
                        type: 'ajax',
                        method: 'post',
                        url: '<?= BASE_URL . 'v2/setting/app/backup/list'; ?>',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            const tbody = $("#dataTable"); // Target tbody
                            tbody.empty(); // Kosongkan tbody sebelum memasukkan data baru
                            
                            $.each(response.tables, function(index, table) {
                                var row = `
                                    <tr>
                                        <td class="text-center">
                                            <input class="form-check-input text-success choose-table" data="${table.name}" type="checkbox" value="${table.name}" aria-label="...">
                                        </td>
                                        <td>${table.name}</td>
                                        <td class="text-end">${table.count}<span class="fst-italic text-muted fs-7">&nbsp;(baris data)</span></td>
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

                function checkOtpFilled(errorMsg) {
                    let isFilled = true;
                    let otpInputs = $("#otp input");
                    
                    $("#otp_error").remove();

                    otpInputs.each(function () {
                        if (!$(this).val()) {
                            isFilled = false;
                        }
                    });

                    if (!isFilled) {
                        $("#otp").after(`<small class="d-flex flex-row text-center text-danger justify-content-center ps-1" id="otp_error">${errorMsg}</small>`);
                        setTimeout(function () {
                            $("#otp_error").fadeOut(300, function () {
                                $(this).remove();
                            });
                        }, 3000);
                    }

                    return isFilled;
                }


                function validateNumber() {
                    $('.inputs').on('keypress', function(e) {
                        var $this = $(this);
                        var regex = new RegExp("^[0-9\b]+$");
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        // for 16 digit number only
                        if ($this.val().length > 7) {
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

                    $('.input').on('paste', function(e) {
                        e.preventDefault();
                        var pastedText = (e.originalEvent || e).clipboardData.getData('text');
                        var sanitizedText = pastedText.replace(/\D/g, ''); // Hanya angka
                        
                        if (sanitizedText.length > 16) {
                            sanitizedText = sanitizedText.substring(0, 16);
                        }
                        
                        $(this).val(sanitizedText);
                    });
                }

                function OTPInput() {
                    const inputs = document.querySelectorAll('#otp > input');
                    for (let i = 0; i < inputs.length; i++) {
                        inputs[i].addEventListener('input', function() {
                            if (this.value.length > 1) {
                                this.value = this.value[0]; //    
                            }
                            if (this.value !== '' && i < inputs.length - 1) {
                                inputs[i + 1].focus(); //   
                            }
                        });

                        inputs[i].addEventListener('keydown', function(event) {
                            if (event.key === 'Backspace') {
                                this.value = '';
                                if (i > 0) {
                                    inputs[i - 1].focus();   
                                }
                            }
                        });

                        inputs[i].addEventListener('paste', function (event) {
                            event.preventDefault(); // Hindari perilaku default
                            let pastedData = (event.clipboardData || window.clipboardData).getData('text').trim();
                            let otpDigits = pastedData.replace(/\D/g, '').split(''); // Ambil hanya angka

                            if (otpDigits.length > inputs.length) {
                                otpDigits = otpDigits.slice(0, inputs.length); // Batasi sesuai jumlah input
                            }

                            // Mengisi input OTP satu per satu
                            inputs.forEach((input, index) => {
                                input.value = otpDigits[index] || ''; // Kosongkan jika tidak ada nilai
                            });

                            // Pindahkan fokus ke input terakhir yang terisi
                            let lastFilledIndex = otpDigits.length - 1;
                            if (lastFilledIndex >= 0 && lastFilledIndex < inputs.length) {
                                inputs[lastFilledIndex].focus();
                            }
                        });
                    }
                }

                OTPInput();
                validateNumber();

                const validateBtn = document.getElementById('validateBtn');
                validateBtn.addEventListener('click', function() {
                    let otp = '';
                    document.querySelectorAll('#otp > input').forEach(input => otp += input.value);
                    alert(`Entered OTP: ${otp}`);  
                });
            });
        </script>
