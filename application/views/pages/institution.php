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
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/setting/instansi' ?>">Instansi</a></li>
                                <?php if ($allowEdit) { ?>
                                    <li class="breadcrumb-item" aria-current="page">Ubah Data</li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Pengaturan</h2>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END OF BREADCRUMB-->

                <!-- MAIN CONTENT -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <?= form_open_multipart('v2/setting/instansi/save-changes', 'id="form-edit-instansi"'); ?>
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">INFORMASI INSTANSI </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <input type="hidden" id="allow-edit" name="allow-edit" value="<?= $allowEdit; ?>">
                                <input type="hidden" id="id_instansi" name="id_instansi" value="<?= $instansi['id_instansi'];?>">
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="institusi">Institusi</label>
                                    <div class="col-md-9">
                                        <input type="text" id="institusi" class="form-control required" placeholder="" name="institusi" value="<?= $instansi['institusi']; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="instansi" id="instansi_label">Nama Instansi</label>
                                    <div class="col-md-9">
                                        <input type="text" id="instansi" class="form-control required" placeholder="" name="instansi" value="<?= $instansi['nama_instansi'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="status" id="status_label">Status</label>
                                    <div class="col-md-9">
                                        <input type="text" id="status" class="form-control required" placeholder="" name="status" value="<?= $instansi['status'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="alamat" id="alamat_label">Alamat Instansi</label>
                                    <div class="col-md-9">
                                        <input type="text" id="alamat" class="form-control required" placeholder="" name="alamat" value="<?= $instansi['alamat'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="ketua" id="ketua_label">Ketua</label>
                                    <div class="col-md-9">
                                        <input type="text" id="ketua" class="form-control required" placeholder="" name="ketua" value="<?= $instansi['ketua'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="nip" id="nip_label">NIP</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nip" class="form-control required" placeholder="" name="nip" value="<?= $instansi['nip'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="website" id="website_label">Website</label>
                                    <div class="col-md-9">
                                        <input type="text" id="website" class="form-control required" placeholder="" name="website" value="<?= $instansi['website'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="email" id="email_label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" id="email" class="form-control required" placeholder="" name="email" value="<?= $instansi['email'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="telp" id="telp_label">Nomor Telepon</label>
                                    <div class="col-md-9">
                                        <input type="text" id="telp" class="form-control required" placeholder="" name="telp" value="<?= $instansi['telp'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="kode_surat" id="kode_surat_label">Kode Surat</label>
                                    <div class="col-md-9">
                                        <input type="text" id="kode_surat" class="form-control required" placeholder="" name="kode_surat" value="<?= $instansi['kode_surat'];?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="logo">Logo Instansi</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_logo" name="prev_logo" value="">
                                            <input type="file" class="dropzone-upload" name="logo" id="logo" accept="image/jpg, image/jpeg, image/png">
                                            <!-- <label for="logo" class="custom-file-label" id="label-image-profile"></label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                <!-- SOME CODE FROM JQUERY -->
                                <div class="d-flex justify-content-end align-items-center mb-2 me-2" id="divEdit">
                                    <a href="<?= BASE_URL . 'v2/setting/instansi/edit' ?>" class="btn btn-success btn-md d-flex align-items-center justify-content-center" id="btnEdit">
                                        <i class="ti ti-pencil"></i>
                                        &nbsp;&nbsp;Ubah Data
                                    </a>
                                </div>
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
                const allowEdit = $('#allow-edit').val();
                $('#logo').attr('disabled', true);
                
                if (allowEdit) {
                    let removedElement = $("#actionCommand div#divEdit").detach();
                    $('#instansi').attr('disabled', false);
                    $('#status').attr('disabled', false);
                    $('#alamat').attr('disabled', false);
                    $('#ketua').attr('disabled', false);
                    $('#nip').attr('disabled', false);
                    $('#website').attr('disabled', false);
                    $('#email').attr('disabled', false);
                    $('#telp').attr('disabled', false);
                    $('#kode_surat').attr('disabled', false);
                    $('#logo').removeAttr('disabled');

                    validateNIP();
                    validatePhoneNumber();

                    let html = `
                        <div class="d-flex justify-content-end align-items-center">
                            <p class="text-muted me-3 fst-italic mt-3 fs-6" id="required-info">Tanda <span class="text-danger">*</span>) wajib diisi!</p>
                            <a href="<?= BASE_URL . 'v2/setting/instansi' ?>" class="btn btn-danger btn-md me-2 w-10" id="btnCancel">
                                <i class="ti ti-x"></i> &nbsp;&nbsp;Batal
                            </a>
                            <a href="javascript:;" class="btn btn-success btn-md w-10" id="btnSave">
                                <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
                            </a>
                        </div>
                    `;
                    $('#actionCommand').html(html);
                    $('#instansi_label').append('<span class="text-danger"> *</span>')
                    $('#status_label').append('<span class="text-danger"> *</span>')
                    $('#alamat_label').append('<span class="text-danger"> *</span>')
                    $('#ketua_label').append('<span class="text-danger"> *</span>')
                    $('#nip_label').append('<span class="text-danger"> *</span>')
                    $('#website_label').append('<span class="text-danger"> *</span>')
                    $('#email_label').append('<span class="text-danger"> *</span>')
                    $('#telp_label').append('<span class="text-danger"> *</span>')
                    $('#kode_surat_label').append('<span class="text-danger"> *</span>')

                    $('#btnSave').click(function(e) {
                        e.preventDefault();
                        let instansi = checkIsFilled('instansi', 'Nama Instansi tidak boleh kosong!');
                        let status = checkIsFilled('status', 'Status tidak boleh kosong!');
                        let alamat = checkIsFilled('alamat', 'Alamat Instansi tidak boleh kosong!');
                        let ketua = checkIsFilled('ketua', 'Ketua tidak boleh kosong!');
                        let nip = checkIsFilled('nip', 'NIP tidak boleh kosong!');
                        let website = checkIsFilled('website', 'Website tidak boleh kosong!');
                        let email = checkIsFilled('email', 'Email tidak boleh kosong!');
                        let telp = checkIsFilled('telp', 'Nomor Telepon tidak boleh kosong!');
                        let kode_surat = checkIsFilled('kode_surat', 'Kode Surat tidak boleh kosong!');
                        if (instansi && status && alamat && ketua && nip && website && email && telp && kode_surat) {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                            if (!emailRegex.test($("#email").val())) {
                                $("#email").after(`<small class="text-danger ps-1" id="email_error">Penulisan email tidak valid!</small>`);
                                setTimeout(function () {
                                    $(`#email_error`).fadeOut(300, function () {
                                        $(this).remove();
                                    });
                                }, 5000);
                            } else {
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
                                        let formData = new FormData($("#form-edit-instansi")[0]);
                                        $.ajax({
                                            url: $("#form-edit-instansi").attr('action'),
                                            type: $("#form-edit-instansi").attr('method'), 
                                            data: formData,
                                            contentType: false, // Harus false agar FormData bisa mengirim file
                                            processData: false, // Harus false agar FormData tidak diproses sebagai string
                                            success: function(response) {
                                                swal({
                                                    title: 'Berhasil!',
                                                    text: 'Perubahan telah disimpan.',
                                                    type: 'success',
                                                    confirmButtonColor: '#2ba87e',
                                                    confirmButtonText: 'Oke'
                                                }).then(() => {
                                                    window.location.href = '<?= BASE_URL . 'v2/setting/instansi/' ?>'; 
                                                });
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
                } else {
                    $("#actionCommand").append(removedElement);
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

                function validateNIP() {
                    $('#nip').on('keypress', function(e) {
                        var $this = $(this);
                        var regex = new RegExp("^[0-9\b]+$");
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        // for 16 digit number only
                        if ($this.val().length > 17) {
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
                        
                        if (sanitizedText.length > 16) {
                            sanitizedText = sanitizedText.substring(0, 16);
                        }
                        
                        $(this).val(sanitizedText);
                    });
                }

                function validatePhoneNumber() {
                    $('#telp').on('keypress', function(e) {
                        var $this = $(this);
                        var regex = new RegExp("^[0-9\-]+$"); // Memungkinkan angka dan tanda "-"
                        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                        
                        if (regex.test(str)) {
                            currentNum = 56;
                            return true;
                        }
                        e.preventDefault();
                        return false;
                    });
                }
            });
        </script>
