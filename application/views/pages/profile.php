        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/profile' ?>">Profil Saya</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Akun</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Profil Saya</h2>
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

                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= BASE_THEME; ?>images/user/<?= $userLogin->img_profile; ?>" alt="user-image" class="user-avatar wid-150" />
                                    <h6 class="mb-0 fs-5 mt-4 fw-bold text-success" id="image_profile_view">Foto Profil</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?= BASE_THEME; ?>images/sign/<?= $userLogin->paraf; ?>" alt="user-image" class="user-avatar wid-150" />
                                    <h6 class="mb-0 fs-5 mt-4 mb-4 fw-bold text-success end-0" id="paraf_view">Paraf</h6>
                                </div>
                            </div>
                        </div>
                        <div class="text-center justify-content-center" id="divEdit">
                            <a href="<?= BASE_URL . 'v2/profile/edit' ?>" class="btn btn-success btn-md d-flex align-items-center justify-content-center" id="btnEdit">
                                <i class="ti ti-pencil"></i>
                                &nbsp;&nbsp;Ubah Profil
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <?= form_open_multipart('v2/profile/save-changes', 'id="form-edit-profil"'); ?>
                        <div class="card h-100 position-relative">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5 fw-bold text-success" id="rekapTitle">INFORMASI AKUN </h6>
                                </div>
                            </div>
                            <div class="card-body mb-5">
                                <input type="hidden" id="allow-edit" name="allow-edit" value="<?= $allowEdit; ?>">
                                <input type="hidden" id="id_user" name="id_user" value="<?= $userLogin->id_user; ?>">
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="username_profile" id="username_label">Nama Pengguna <span class="fst-italic text-muted fs-7">&nbsp;&nbsp;(digunakan untuk login)</span></label>
                                    <div class="col-md-9">
                                        <input type="text" id="username_profile" class="form-control required" placeholder="" name="username_profile" value="<?= $userLogin->username; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center ">
                                    <label class="col-md-3 label-control" for="fullname_profile" id="fullname_label">Nama Lengkap</label>
                                    <div class="col-md-9">
                                        <input type="text" id="fullname_profile" class="form-control required" placeholder="" name="fullname_profile" value="<?= $userLogin->nama; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="email_profile" id="email_label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" id="email_profile" class="form-control required" placeholder="" name="email_profile" value="<?= $userLogin->email; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="instansi_profile">Instansi</label>
                                    <div class="col-md-9">
                                        <input type="text" id="instansi_profile" class="form-control required" placeholder="" name="instansi_profile" value="<?= $instansi['nama_instansi']; ?>" disabled>
                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="tipeuser_profile">Tipe Pengguna</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tipeuser_profile" class="form-control required" placeholder="" name="tipeuser_profile" value="<?= $userLogin->jabatan; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="image_profile">Foto Profil</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_image_profile" name="prev_image_profile" value="<?= $userLogin->img_profile; ?>">
                                            <input type="file" class="dropzone-upload" name="image_profile" id="image_profile" accept="image/jpg, image/jpeg, image/png">
                                            <!-- <label for="image_profile" class="custom-file-label" id="label-image-profile"></label> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-3 label-control" for="paraf_profile">Paraf</label>
                                    <div class="col-md-9">
                                        <div class="dropzone text-start">
                                            <input type="hidden" id="prev_paraf_profile" name="prev_paraf_profile" value="<?= $userLogin->paraf; ?>">
                                            <input type="file" class="dropzone-upload" name="paraf_profile" id="paraf_profile" accept="image/jpg, image/jpeg, image/png">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group row align-items-center">
                                    <label for="customFileInput" class="col-md-3 form-label">Paraf</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="customFileInput" hidden>
                                            <button class="btn btn-success" type="button" onclick="document.getElementById('customFileInput').click();">Pilih File</button>
                                            <span class="form-control" id="fileNameDisplay">Tidak ada file dipilih</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="position-absolute bottom-0 end-0 p-3 w-100" id="actionCommand">
                                <!-- SOME CODE FROM JQUERY -->
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
                let removedElement = $("#divEdit a").detach();
                $('#image_profile').attr('disabled', true);
                $('#paraf_profile').attr('disabled', true);

                if (allowEdit) {
                    $('#username_profile').attr('disabled', false);
                    $('#fullname_profile').attr('disabled', false);
                    $('#email_profile').attr('disabled', false);
                    $('#image_profile').removeAttr('disabled');
                    $('#paraf_profile').removeAttr('disabled');

                    // validateNIP();

                    let html = `
                        <div class="d-flex justify-content-end align-items-center">
                            <p class="text-muted me-3 fst-italic mt-3 fs-6" id="required-info">Tanda <span class="text-danger">*</span>) wajib diisi!</p>
                            <a href="<?= BASE_URL . 'v2/profile/' ?>" class="btn btn-danger btn-md me-2 w-10" id="btnCancel">
                                <i class="ti ti-x"></i> &nbsp;&nbsp;Batal
                            </a>
                            <a href="javascript:;" class="btn btn-success btn-md w-10" id="btnSave">
                                <i class="ti ti-device-floppy"></i> &nbsp;&nbsp;Simpan
                            </a>
                        </div>
                    `;
                    $('#actionCommand').html(html);
                    $('#username_label').append('<span class="text-danger"> *</span>')
                    $('#fullname_label').append('<span class="text-danger"> *</span>')
                    $('#email_label').append('<span class="text-danger"> *</span>')

                    $('#btnSave').click(function(e) {
                        e.preventDefault();
                        let username = checkIsFilled('username_profile', 'Nama Pengguna tidak boleh kosong!');
                        let fullname = checkIsFilled('fullname_profile', 'Nama Lengkap tidak boleh kosong!');
                        let email = checkIsFilled('email_profile', 'Email tidak boleh kosong!');
                        if (username && fullname && email) {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                            if (!emailRegex.test($("#email_profile").val())) {
                                $("#email_profile").after(`<small class="text-danger ps-1" id="email_error">Penulisan email tidak valid!</small>`);
                                setTimeout(function () {
                                    $(`#email_error`).fadeOut(300, function () {
                                        $(this).remove();
                                    });
                                }, 3000);
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
                                        let formData = new FormData($("#form-edit-profil")[0]);
                                        $.ajax({
                                            url: $("#form-edit-profil").attr('action'),
                                            type: $("#form-edit-profil").attr('method'), 
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
                                                    window.location.href = '<?= BASE_URL . 'v2/profile/' ?>'; 
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
                    $("#divEdit").append(removedElement);
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
                        }, 3000);
                        isFilled = false;
                    }
                    return isFilled;
                }
            });
        </script>
