        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/profile' ?>">Profil</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Ubah Kata Sandi</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Ubah Kata Sandi</h2>
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
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">KATA SANDI AKUN </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <input type="hidden" id="username" name="username" value="<?= $this->session->userdata('username'); ?>">
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="old_password" id="old_password_label">Kata Sandi saat ini</label>
                                    <div class="col-md-9">
                                        <input type="password" id="old_password" class="form-control required" placeholder="" name="old_password" value="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="new_password" id="new_password_label">Kata Sandi Baru</label>
                                    <div class="col-md-9">
                                        <input type="password" id="new_password" class="form-control required" placeholder="" name="new_password" value="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="confirm_password" id="confirm_password_label">Ketik Ulang Kata Sandi Baru</label>
                                    <div class="col-md-9">
                                        <input type="password" id="confirm_password" class="form-control required" placeholder="" name="confirm_password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                <div class="d-flex justify-content-end align-items-center">
                                    <p class="text-muted me-3 fst-italic mt-3 fs-6" id="required-info">Tanda <span class="text-danger">*</span>) wajib diisi!</p>
                                    <a href="<?= BASE_URL . 'v2/profile/' ?>" class="btn btn-danger btn-md me-2 w-10" id="btnCancel">
                                        <i class="ti ti-x"></i> &nbsp;&nbsp;Batal
                                    </a>
                                    <a href="javascript:;" class="btn btn-success btn-md me-2 w-10" id="btnSave">
                                        <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
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
