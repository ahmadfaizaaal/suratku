<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require_once('application/models/Test.php');

class V2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_General', 'general');
        $this->load->model('M_User', 'user');
        $this->load->model('M_Instansi', 'instansi');
        $this->load->model('M_Surat', 'surat');
        $this->load->dbutil();
        date_default_timezone_set('Asia/Bangkok');
    }
    
    public function index()
    {
        if (!$this->session->userdata('username')) {
            $token = get_cookie('remember_token');

            if ($token) {
                $userLogin = $this->user->getDataUserByToken($token);

                if ($userLogin) {
                    $data = [
                        'id_user' => $userLogin->id_user,
                        'id_instansi' => $userLogin->id_instansi,
                        'username' => $userLogin->username,
                        'nama' => $userLogin->nama,
                        'jabatan' => $userLogin->jabatan,
                        'image' => $userLogin->img_profile,
                        'role' => $userLogin->role,
                        'last_time_login' => time()
                    ];
                    $this->session->set_userdata($data);
                } else {
                    delete_cookie('remember_token');
                    redirect('v2/auth');
                }
            } else {
                redirect('v2/auth');
            }
        }

        $data = $this->initiateDashboardPageData();
        load_page('pages/dashboard', SYS_NAME, $data);
    }

    public function auth($action = null) {
        switch ($action) {
			case null:
				if ($this->session->userdata('username')) {
                    redirect('v2');
                }
                // load_page('pages/auth/login', SYS_NAME);
                $data['title'] = SYS_NAME;
				$this->load->view("pages/auth/login", $data);
				break;
			case "login":
                if ($this->session->userdata('username')) {
                    redirect('v2');
                }
        
                $this->form_validation->set_rules('username', 'Nama Pengguna', 'required|trim', [
                    'required' => "Nama Pengguna harus diisi!"
                ]);
                $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim', [
                    'required' => "Kata Sandi harus diisi!"
                ]);
        
                if ($this->form_validation->run() == false) {
                    $data['title'] = SYS_NAME;
                    $this->load->view('pages/auth/login', $data);
                    // load_page('pages/auth/login', SYS_NAME);
                } else {
                    $this->_login();
                }
				break;
			case "logout":
                $this->logout();
				break;
			case "check-session":
				break;
			default:
				redirect(404);
				break;
		}
    }

    public function profile($action = null) {
        if (!$this->session->userdata('username')) {
            redirect('v2');
        }

        switch ($action) {
			case null:
				// if (!$this->session->userdata('username')) {
                //     redirect('v2');
                // }
                $data = $this->initiateUserProfileData();
				load_page('pages/profile', SYS_NAME, $data);
				break;
			case "edit":
                // if (!$this->session->userdata('username')) {
                //     redirect('v2');
                // }
        
                $data = $this->initiateUserProfileData($action);
				load_page('pages/profile', SYS_NAME, $data);
				break;
			case "save-changes":
                $updated = $this->updateProfile();
                if ($updated) {
                    redirect('v2/profile/');
                }
				break;
            case "change-password":
                $data = $this->initiateUserProfileData();
                load_page('pages/change_password', SYS_NAME, $data);
                break;
            case "save-changes-password":
                $param = array(
                    'username' => $this->input->post('username'),
                    'old_password' => $this->input->post('old_password'),
                    'new_password' => $this->input->post('new_password'),
                    'confirm_password' => $this->input->post('confirm_password')
                );
                $userLogin = $this->user->getDataUser('username', $param['username']);

                if (password_verify($param['old_password'], $userLogin->password)) {
                    $this->form_validation->set_rules('new_password', 'Kata Sandi Baru', 'required|trim|min_length[5]|matches[confirm_password]', [
                        'min_length' => "Kata Sandi Baru minimal 5 karakter!"
                    ]);
                    $this->form_validation->set_rules('confirm_password', 'Konfirmasi Kata Sandi', 'required|trim|matches[new_password]', [
                        'matches' => "Konfirmasi Kata Sandi tidak cocok dengan Kata Sandi Baru!"
                    ]);

                    if ($this->form_validation->run() == false) {
                        $errors = [
                            'new_password' => (form_error('new_password') && !strpos(form_error('new_password'), 'does not match')) ? form_error('new_password', '<small class="text-danger ps-1">', '</small>') : "",
                            'confirm_password' => form_error('confirm_password', '<small class="text-danger ps-1">', '</small>')
                        ];
                        echo json_encode(['status' => 'error', 'errors' => $errors]);
                    } else {
                        $user = array(
                            'password' => password_hash($param['confirm_password'], PASSWORD_DEFAULT)
                        );
                        $updated = $this->user->updateDataUser(TBL_USER, array('column' => 'id_user', 'value' => $userLogin->id_user), $user);
                        if ($updated) {
                            echo json_encode(['status' => 'success', 'message' => 'Kata Sandi berhasil diperbarui!']);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Gagal memperbarui Kata Sandi.']);
                        }
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Kata Sandi saat ini salah!']);
                }
				break;
			default:
				redirect(404);
				break;
		}
    }

    public function transaksi($action = null) {
        if (!$this->session->userdata('username')) {
            redirect('v2');
        }

        switch ($action) {
			case null:
                redirect(404);
				break;
			case "surat-masuk":
                $urlParam = $this->uri->segment(4);
                switch ($urlParam) {
                    case null:
                        $data = $this->initiateUserProfileData();                        
                        load_page('pages/surat_masuk', SYS_NAME, $data);
                        break;
                    case "list":
                        $tahun = $this->uri->segment(5) ?? (string) date('Y');
                        $data['surat'] = $this->surat->getListSuratMasuk($tahun);
                        echo json_encode($data);
                        break;
                    case "detail":
                        $idSurat = $this->uri->segment(5);
                        $data['surat'] = $this->surat->getDataSurat(TBL_SURAT_MASUK, 'id_surat', $idSurat);
                        $data['disposisi'] = $this->surat->getDataDisposisi(TBL_DISPOSISI, 'id_surat', $idSurat);
                        echo json_encode($data);
                        break;
                    case "save-changes":
                        $executed = false;

                        $actionType = $this->input->post('actionType') ?? "";
                        $idSurat = $this->input->post('id_surat') ?? null;
                        $param = array(
                            'no_agenda'    => $this->input->post('nomor_agenda', true),
                            'no_surat'     => $this->input->post('nomor_surat', true),
                            'asal_surat'   => $this->input->post('asal_surat', true),
                            'isi'          => $this->input->post('hal_surat', true),
                            'kode'         => $this->input->post('kode_surat', true),
                            'lampiran'     => $this->input->post('lampiran_surat', true) ?? '-',
                            'tgl_surat'    => $this->input->post('tgl_surat', true),
                            'tgl_diterima' => $this->input->post('tgl_diterima', true),
                            'file'         => $this->input->post('prev_file_surat', true),
                            'sifat'        => $this->input->post('sifat_surat', true),
                        );

                        // Ambil data disposisi (dikirim dalam format JSON)
                        $disposisi_data = json_decode($this->input->post('disposisi'), true);
                        $deleted_disposisi = json_decode($this->input->post('deleted_disposisi'), true);
                        
                        // Debug: Cek apakah data masuk dengan benar
                        // echo "<pre>" . $idSurat; echo "</pre><br>";
                        // echo "<pre>" . $actionType; echo "</pre><br>";
                        // echo "<pre>"; print_r($disposisi_data); echo "</pre><br>";
                        // echo "<pre>"; print_r($deleted_disposisi); echo "</pre><br>";
                        // echo "<pre>"; print_r($param); echo "</pre>";
                        // die;

                        if ($_FILES['file_surat']['name']) {
                            $file = $this->uploadFile('file_surat', $param['file'], 'docs', $param['no_agenda'], $action, $param['isi']);
                            $param['file'] = $file[1];
                        }
        
                        $message = array('success' => '', 'error' => '');
                        if ($actionType == 'add') {
                            $message = array(
                                'success' => 'Surat masuk berhasil ditambahkan!',
                                'error' => 'Gagal menambahkan data surat masuk'
                            );
                            $exist = $this->surat->checkIsExistSurat(TBL_SURAT_MASUK, $param['no_surat']);
                            if (!$exist) {
                                $idSurat = $this->surat->insertDataSurat(TBL_SURAT_MASUK, $param);
                                $executed = !empty($idSurat) ? true : false;
                            } else {
                                $message['error'] = 'Nomor surat sudah digunakan!';
                            }
                        } else if ($actionType == 'edit') {
                            $message = array(
                                'success' => 'Data surat masuk berhasil diperbarui!',
                                'error' => 'Gagal memperbarui data surat masuk!'
                            );
                            $executed = $this->surat->updateDataSurat(TBL_SURAT_MASUK, array('column' => 'id_surat', 'value' => $idSurat), $param);
                        }
        
                        if ($executed) {
                            if (!empty($disposisi_data)) {
                                foreach ($disposisi_data as $row) {
                                    $dataDisposisi = [
                                        'id_surat'         => $idSurat,
                                        'disposed_by'      => $row['disposed_by'],
                                        'disposed_to'      => $row['disposed_to'],
                                        'tgl_disposisi'    => $row['tgl_disposisi'],
                                        'catatan'          => $row['catatan'],
                                        'status'           => '1',
                                        'user_destination' => $row['id_user_tujuan'],
                                        'created_by'       => $this->session->userdata('id_user')
                                    ];
                                    if (!empty($row['id_disposisi'])) {
                                        $this->surat->updateDataDisposisi(array('column' => 'id_disposisi', 'value' => $row['id_disposisi']), $dataDisposisi);
                                    } else {
                                        $this->surat->insertDataDisposisi($dataDisposisi);
                                    }
                                    // $this->surat->insertDataDisposisi($dataDisposisi);
                                }
                            }
                        
                            // Hapus disposisi yang dihapus user
                            if (!empty($deleted_disposisi)) {
                                foreach ($deleted_disposisi as $id) {
                                    $this->surat->deleteDataDisposisi($id);
                                }
                            }

                            echo json_encode(['status' => 'success', 'message' => $message['success']]);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => $message['error']]);
                        }
                        break;
                    case "delete":
                        $idSurat = $this->uri->segment(5);
                        if (!empty($idSurat)) {
                            $thisSurat = $this->surat->getDataSurat(TBL_SURAT_MASUK, 'id_surat', $idSurat);
                            if ($thisSurat) {
                                $filePath = './assets/uploads/docs/' . $action . '/' . $thisSurat->file;

                                $hasDisposition = $this->surat->getDataDisposisi(TBL_DISPOSISI, 'id_surat', $idSurat);
                                if (!empty($hasDisposition)) {
                                    foreach ($hasDisposition as $item) {
                                        $this->surat->deleteDataDisposisi($item->id_disposisi);
                                    }
                                }
    
                                $deleted = $this->surat->deleteDataSurat(TBL_SURAT_MASUK, $idSurat);

                                if ($deleted) {
                                    if (!empty($thisSurat->file) && file_exists($filePath)) {
                                        unlink($filePath);
                                    }
                                    echo json_encode(['status' => 'success', 'message' => 'Data surat masuk berhasil dihapus!']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data surat masuk.']);
                                }
                            }
                        }
                        break;
                    case "preview":
                        $fileName = $this->input->get('file');
                        $filePath = './assets/uploads/docs/' . $action . '/' . $fileName;
                        if (!file_exists($filePath)) {
                            show_404();
                            return;
                        }
                        $data['title'] = SYS_NAME;
                        $data['file'] = base_url("v2/get-file/$action?file=" . urlencode($fileName)) . '#zoom=page-fit&navpanes=0';
                        $this->load->view("pages/pdf_viewer", $data);
                        break;
                    default:
                        redirect(404);
                        break;
                }
                break;
            case "surat-keluar":
                $urlParam = $this->uri->segment(4);
                switch ($urlParam) {
                    case null:
                        $data = $this->initiateUserProfileData();                        
                        load_page('pages/user_list', SYS_NAME, $data);
                        break;
                    case "list":
                        $data['users'] = $this->user->getListUsers();
                        echo json_encode($data);
                        break;
                    default:
                        redirect(404);
                        break;
                }
                break;
			case "list-pegawai":
                $data['pegawai'] = $this->user->getListUsers('orderBy', array('column' => 'nama', 'value' => 'ASC'));
                echo json_encode($data);
                break;
            case "get-detail":
                $idKlasifikasi = $this->uri->segment(4);
                $data['klasifikasi'] = $this->surat->getDetailKlasifikasi($idKlasifikasi);
                echo json_encode($data);
                break;
            case "child-availability":
                $kode = $this->uri->segment(4);
                $child = $this->surat->getChildKlasifikasi($kode);
                if (!empty($child)) {
                    $data['hasChild'] = true;
                    $data['child'] = $child;
                } else {
                    $data['hasChild'] = false;
                }
                echo json_encode($data);
                break;
            case "delete":
                $param = $this->input->post('param');
                if (!empty($param)) {
                    if (is_array($param)) {
                        foreach ($param as $obj) {
                            $deleted = $this->surat->deleteDataKlasifikasi($obj['id_klasifikasi']);
                        }
                    } else {
                        $deleted = $this->surat->deleteDataKlasifikasi($param);
                    }

                    if ($deleted) {
                        echo json_encode(['status' => 'success', 'message' => 'Data klasifikasi berhasil dihapus!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data klasifikasi.']);
                    }
                }
                break;
            case "save-changes":
                $executed = false;
                $idKlasifikasi = $this->input->post('idKlasifikasi') ?? null;
                $param = array(
                    'id_user' => (int) $this->session->userdata('id_user'),
                    'id_parent' => (int) $this->input->post('parent') ?? 0,
                    'kode' => $this->input->post('first') . ($this->input->post('second') ?? ""),
                    'nama' => $this->input->post('keterangan'),
                    'uraian' => $this->input->post('uraian') ?? "",
                    'status' => $this->input->post('status')
                );

                $actionType = $this->input->post('actionType') ?? "";
                $message = array(
                    'success' => '',
                    'error' => ''
                );
                if ($actionType == 'add') {
                    $message = array(
                        'success' => 'Data sub klasifikasi berhasil ditambahkan!',
                        'error' => 'Gagal menambahkan data sub klasifikasi!'
                    );
                    $exist = $this->surat->checkIsExistKlasifikasi($param['kode']);
                    if (!$exist) {
                        $executed = $this->surat->insertDataKlasifikasi($param);
                    } else {
                        $message['error'] = 'Kode klasifikasi sudah ada!';
                    }
                } else if ($actionType == 'edit') {
                    $message = array(
                        'success' => 'Data sub klasifikasi berhasil diperbarui!',
                        'error' => 'Gagal memperbarui data sub klasifikasi!'
                    );
                    $exist = $this->surat->checkIsExistKlasifikasi($param['kode']);
                    if (!$exist) {
                        $executed = $this->surat->updateDataKlasifikasi(array('column' => 'id_klasifikasi', 'value' => $idKlasifikasi), $param);
                    } else {
                        $message['error'] = 'Kode klasifikasi sudah ada!';
                    }
                }

                if ($executed) {
                    echo json_encode(['status' => 'success', 'message' => $message['success']]);
                } else {
                    echo json_encode(['status' => 'error', 'message' => $message['error']]);
                }
                break;
			default:
				redirect(404);
				break;
		}
    }

    public function referensi($action = null) {
        if (!$this->session->userdata('username')) {
            redirect('v2');
        }

        switch ($action) {
			case null:
                $data = $this->initiateUserProfileData();
				load_page('pages/reference', SYS_NAME, $data);
				break;
			case "list-parent-klasifikasi":
                $data['parent'] = $this->surat->getParentKlasifikasi();
                echo json_encode($data);
				break;
            case "list-klasifikasi-all":
                $excludeCode = $this->uri->segment(4);
                if (!empty($excludeCode)) {
                    $data['klasifikasi'] = $excludeCode == '0000' ? $this->surat->getListKlasifikasi(null, false) : $this->surat->getListKlasifikasi($excludeCode);
                } else {
                    $data['klasifikasi'] = $this->surat->getListKlasifikasi();
                }
                echo json_encode($data);
                break;
			case "list-sub-klasifikasi":
                $parent = $this->uri->segment(4) ?? "HK";
                $data['subKlasifikasi'] = $this->surat->getSubKlasifikasi($parent);
                echo json_encode($data);
                break;
            case "get-detail":
                $idKlasifikasi = $this->uri->segment(4);
                $data['klasifikasi'] = $this->surat->getDetailKlasifikasi($idKlasifikasi);
                echo json_encode($data);
                break;
            case "child-availability":
                $kode = $this->uri->segment(4);
                $child = $this->surat->getChildKlasifikasi($kode);
                if (!empty($child)) {
                    $data['hasChild'] = true;
                    $data['child'] = $child;
                } else {
                    $data['hasChild'] = false;
                }
                echo json_encode($data);
                break;
            case "delete":
                $param = $this->input->post('param');
                if (!empty($param)) {
                    if (is_array($param)) {
                        foreach ($param as $obj) {
                            $deleted = $this->surat->deleteDataKlasifikasi($obj['id_klasifikasi']);
                        }
                    } else {
                        $deleted = $this->surat->deleteDataKlasifikasi($param);
                    }

                    if ($deleted) {
                        echo json_encode(['status' => 'success', 'message' => 'Data klasifikasi berhasil dihapus!']);
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data klasifikasi.']);
                    }
                }
                break;
            case "save-changes":
                $executed = false;
                $idKlasifikasi = $this->input->post('idKlasifikasi') ?? null;
                $param = array(
                    'id_user' => (int) $this->session->userdata('id_user'),
                    'id_parent' => (int) $this->input->post('parent') ?? 0,
                    'kode' => $this->input->post('first') . ($this->input->post('second') ?? ""),
                    'nama' => $this->input->post('keterangan'),
                    'uraian' => $this->input->post('uraian') ?? "",
                    'status' => $this->input->post('status')
                );

                $actionType = $this->input->post('actionType') ?? "";
                $message = array(
                    'success' => '',
                    'error' => ''
                );
                if ($actionType == 'add') {
                    $message = array(
                        'success' => 'Data sub klasifikasi berhasil ditambahkan!',
                        'error' => 'Gagal menambahkan data sub klasifikasi!'
                    );
                    $exist = $this->surat->checkIsExistKlasifikasi($param['kode']);
                    if (!$exist) {
                        $executed = $this->surat->insertDataKlasifikasi($param);
                    } else {
                        $message['error'] = 'Kode klasifikasi sudah ada!';
                    }
                } else if ($actionType == 'edit') {
                    $message = array(
                        'success' => 'Data sub klasifikasi berhasil diperbarui!',
                        'error' => 'Gagal memperbarui data sub klasifikasi!'
                    );
                    $exist = $this->surat->checkIsExistKlasifikasi($param['kode']);
                    if (!$exist) {
                        $executed = $this->surat->updateDataKlasifikasi(array('column' => 'id_klasifikasi', 'value' => $idKlasifikasi), $param);
                    } else {
                        $message['error'] = 'Kode klasifikasi sudah ada!';
                    }
                }

                if ($executed) {
                    echo json_encode(['status' => 'success', 'message' => $message['success']]);
                } else {
                    echo json_encode(['status' => 'error', 'message' => $message['error']]);
                }
                break;
			default:
				redirect(404);
				break;
		}
    }

    public function setting($action = null) {
        if (!$this->session->userdata('username')) {
            redirect('v2');
        }

        switch ($action) {
			case null:
                redirect(404);
				break;
			case "instansi":
                $data['instansi'] = $this->initiateInstitutionDescData();
                $data['userLogin'] = $this->user->getDataUser('username', $this->session->userdata('username'));
                $data['allowEdit'] = false;

                $urlParam = $this->uri->segment(4);
                switch ($urlParam) {
                    case null:
                        load_page('pages/institution', SYS_NAME, $data);
                        break;
                    case "edit":
                        $data['allowEdit'] = true;
                        load_page('pages/institution', SYS_NAME, $data);
                        break;
                    case "save-changes":
                        $updated = $this->updateInstansi();
                        if ($updated) {
                            redirect('v2/setting/instansi/');
                        }
                        break;
                    default:
                        redirect(404);
                        break;
                }
				break;
			case "users":
                $urlParam = $this->uri->segment(4);
                switch ($urlParam) {
                    case null:
                        $data = $this->initiateUserProfileData();                        
                        load_page('pages/user_list', SYS_NAME, $data);
                        break;
                    case "list":
                        $data['users'] = $this->user->getListUsers();
                        echo json_encode($data);
                        break;
                    case "detail":
                        $idUser = $this->uri->segment(5);
                        $data['user'] = $this->user->getDataUser('id_user', $idUser);
                        echo json_encode($data);
                        break;
                    case "save-changes":
                        $actionType = $this->input->post('actionType') ?? "";
                        $idUser = $this->input->post('id_user');
                        $message = array('success' => '', 'error' => '');
                        $param = array(
                            'username' => $this->input->post('username'),
                            'nama' => $this->input->post('nama'),
                            'nip' => $this->input->post('nip'),
                            'email' => $this->input->post('email') ?? "-",
                            'jabatan' => $this->input->post('jabatan'),
                            'role' => $this->input->post('role'),
                            'status' => $this->input->post('status_choosen')
                        );

                        if ($actionType == 'add') {
                            $mandatory = array(
                                'id_instansi' => $this->session->userdata('id_instansi'),
                                'password' => password_hash(DEFAULT_CREDENTIAL, PASSWORD_DEFAULT),
                                'img_profile' => 'default-user.png',
                            );
                            $param = array_merge($param, $mandatory);
                            $executed = $this->user->insertDataUser($param);
                            $message = array('success' => 'Data user berhasil ditambahkan!', 'error' => 'Gagal menambahkan data user!');
                        } else if ($actionType == 'edit') {
                            $executed = $this->user->updateDataUser(TBL_USER, array('column' => 'id_user', 'value' => $idUser), $param);
                            $message = array('success' => 'Data user berhasil diperbarui!', 'error' => 'Gagal memperbarui data user!');
                        }
                        if ($executed) {
                            echo json_encode(['status' => 'success', 'message' => $message['success']]);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => $message['error']]);
                        }
                        break;
                    case "delete":
                        $idUser = $this->uri->segment(5);
                        $deleted = $this->user->deleteDataUser($idUser);
                        if ($deleted) {
                            echo json_encode(['status' => 'success', 'message' => 'Data user berhasil dihapus!']);
                        } else {
                            echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus data user.']);
                        }
                        break;
                    default:
                        redirect(404);
                        break;
                }
                break;
            case "app":
                $urlParam = $this->uri->segment(4);
                switch ($urlParam) {
                    case "backup":
                        $urlParam = $this->uri->segment(5);
                        switch ($urlParam) {
                            case null:
                                $data = $this->initiateUserProfileData();                         
                                load_page('pages/backup', SYS_NAME, $data);
                                break;
                            case "list":
                                $data['tables'] = [];
                                $tables = $this->general->getListTables();
                                foreach ($tables as $index => $table) {
                                    $count = $this->general->countDataTable($table);
                                    $data['tables'][] = [
                                        'id' => $index,
                                        'name' => $table, 
                                        'count' => $count
                                    ];
                                }
                                echo json_encode($data);
                                break;
                            case "validate-otp":
                                $otp = $this->input->post('otp');
                                if (SECRET_PIN === $otp) {
                                    echo json_encode(['valid' => true, 'message' => 'Kode keamanan valid!']);
                                } else {
                                    echo json_encode(['valid' => false, 'message' => 'Gagal memvalidasi kode keamanan.']);
                                }
                                break;
                            case "exec-all":
                                $backedUp = $this->executeBackup('all');
                                if ($backedUp) {
                                    echo json_encode(['status' => 'success', 'message' => 'Data berhasil dicadangkan!']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Gagal mencadangkan data.']);
                                }
                                break;
                            case "exec-partial":
                                // $tables = $this->input->post('tables');
                                $param = $this->input->get('tables');
                                $tables = explode(",", $param);
                                $backedUp = $this->executeBackup('partial', $tables);
                                if ($backedUp) {
                                    echo json_encode(['status' => 'success', 'message' => 'Data berhasil dicadangkan!']);
                                } else {
                                    echo json_encode(['status' => 'error', 'message' => 'Gagal mencadangkan data.']);
                                }
                                break;
                            default:
                                redirect(404);
                                break;
                        }
                        break;
                    case "restore":
                        $idUser = $this->uri->segment(5);
                        $data['user'] = $this->user->getDataUser('id_user', $idUser);
                        echo json_encode($data);
                        break;
                    default:
                        redirect(404);
                        break;
                }
                break;
			default:
				redirect(404);
				break;
		}
    }

    private function _login()
    {
        $role = '';
        $data = [];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $rememberMe = $this->input->post('rememberMe');
        $userLogin = $this->user->getDataUser('username', $username);

        if ($userLogin) {
            $role = $userLogin->role;
            // $user = array(
            //     'password' => password_hash($password, PASSWORD_DEFAULT)
            // );
            // $this->user->updateDataUser($userLogin->id_user, $user);
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="flashdata_message">
                    <strong>Nama Pengguna</strong> tidak terdaftar!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('v2/auth/login');
        }
        // }

        //CHECK IF PASSWORD IS MATCH
        if (password_verify($password, $userLogin->password)) {
            $this->user->updateLastTimeLoginUser($userLogin->id_user);
            // if ('1' == $role) {
                $data = [
                    'id_user' => $userLogin->id_user,
                    'id_instansi' => $userLogin->id_instansi,
                    'username' => $userLogin->username,
                    'nama' => $userLogin->nama,
                    'jabatan' => $userLogin->jabatan,
                    'image' => $userLogin->img_profile,
                    'role' => $role,
                    'last_time_login' => time()
                ];

                if ($rememberMe) {
                    $token = bin2hex(random_bytes(32));
                    $this->user->updateRememberToken($userLogin->id_user, $token);
                    set_cookie('remember_token', $token, 604800); // 7 hari (604800 detik)
                }
                $this->session->set_userdata($data);
                redirect('v2');
            // }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="flashdata_message">
                    <strong>Kata Sandi</strong> salah!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('v2/auth/login/' . $param);
        }
    }

    private function updateProfile() {
        $idUser = $this->input->post('id_user');

        $param = array(
            'username' => $this->input->post('username_profile'),
            'nama' => $this->input->post('fullname_profile'),
            'email' => $this->input->post('email_profile'),
            'img_profile' => $this->input->post('prev_image_profile'),
            'paraf' => $this->input->post('prev_paraf_profile')
        );

        if ($_FILES['image_profile']['name']) {
            $image_profile = $this->uploadFile('image_profile', $param['img_profile'], 'user', $idUser);
            $param['img_profile'] = $image_profile[1];
        }

        if ($_FILES['paraf_profile']['name']) {
            $paraf = $this->uploadFile('paraf_profile', $param['paraf'], 'sign', $idUser);
            $param['paraf'] = $paraf[1];
        }

        $updated = $this->user->updateDataUser(TBL_USER, array('column' => 'id_user', 'value' => $idUser), $param);

        return $updated;
    }

    private function updateInstansi() {
        $idInstansi = $this->input->post('id_instansi');

        $param = array(
            'nama_instansi' => $this->input->post('instansi'),
            'status' => $this->input->post('status'),
            'alamat' => $this->input->post('alamat'),
            'ketua' => $this->input->post('ketua'),
            'nip' => $this->input->post('nip'),
            'website' => $this->input->post('website'), 
            'email' => $this->input->post('email'), 
            'telp' => $this->input->post('telp'), 
            'kode_surat' => $this->input->post('kode_surat'),
            'logo' => $this->input->post('prev_logo'),
            'id_user' => $this->session->userdata('id_user')
        );

        if ($_FILES['logo']['name']) {
            $logo = $this->uploadFile('logo', $param['logo'], 'institution', $idInstansi);
            $param['logo'] = $logo[1];
        }

        $updated = $this->instansi->updateDataInstansi(TBL_INSTANSI, array('column' => 'id_instansi', 'value' => $idInstansi), $param);

        return $updated;
    }

    private function initiateInstitutionDescData() {
        $instansi = $this->instansi->getDataInstansi($this->session->userdata('id_instansi'));
        $data = array(
            'id_instansi' => $instansi->id_instansi,
            'institusi' => $instansi->institusi,
            'nama_instansi' => $instansi->nama_instansi,
            'status' => $instansi->status,
            'alamat' => $instansi->alamat,
            'ketua' => $instansi->ketua,
            'nip' => $instansi->nip, 
            'website' => $instansi->website, 
            'email' => $instansi->email, 
            'telp' => $instansi->telp, 
            'logo' => $instansi->logo,
            'id_user' => $instansi->id_user,
            'kode_surat' => $instansi->kode_surat
        );

        return $data;
    }

    private function initiateDashboardPageData() {
        $data['instansi'] = $this->initiateInstitutionDescData();
        $data['userLogin'] = $this->user->getDataUser('username', $this->session->userdata('username'));
        $data['summary'] = array(
            'surat_masuk' => $this->general->countDataTable('tbl_surat_masuk'),
            'surat_keluar' => $this->general->countDataTable('tbl_surat_keluar'),
            'disposisi' => $this->general->countDataTable('tbl_disposisi'),
            'klasifikasi_surat' => $this->general->countDataTable('tbl_klasifikasi_new')
        );
        return $data;
    }

    private function initiateUserProfileData($action = null) {
        $data['instansi'] = $this->initiateInstitutionDescData();
        $data['userLogin'] = $this->user->getDataUser('username', $this->session->userdata('username'));
        $data['allowEdit'] = false;
        if (!empty($action) && $action == 'edit') {
            $data['allowEdit'] = true;
        }
        return $data;
    }

    public function populate_list_tahun() {
        $data['listTahun'] = $this->surat->getDataTahunSuratMasuk();
        echo json_encode($data);
    }

    public function populate_data_surat($tahun) {
        $data['suratMasuk'] = $this->surat->getRekapSuratMasukPerBulan($tahun);
        $data['suratKeluar'] = $this->surat->getRekapSuratKeluarPerBulan($tahun);
        $data['sifatSuratMasuk'] = $this->populateSifatSurat($this->surat->getSifatSuratMasuk($tahun));
        $data['sifatSuratKeluar'] = $this->populateSifatSurat($this->surat->getSifatSuratKeluar($tahun));
        
        $suratMasuk = array_fill(0, 12, 0);
        $suratKeluar = array_fill(0, 12, 0);

        if (!empty($data['suratMasuk'])) {
            foreach ($data['suratMasuk'] as $value) {
                $index = $value->bulan - 1;
                $suratMasuk[$index] = $value->jumlah_surat;
            }
        }
        $data['suratMasuk'] = $suratMasuk;
        
        if (!empty($data['suratKeluar'])) {
            foreach ($data['suratKeluar'] as $value) {
                $index = $value->bulan - 1;
                $suratKeluar[$index] = $value->jumlah_surat;
            }
        }
        $data['suratKeluar'] = $suratKeluar;
        
        echo json_encode($data);
    }

    private function populateSifatSurat($data) {
        $sifatSurat = ['Biasa' => 0, 'Segera' => 0, 'Penting' => 0, 'Rahasia' => 0];

        if (!empty($data)) {
            foreach ($data as $row) {
                $sifatSurat[$row->sifat] = $row->jumlah;
            }
        }

        return $sifatSurat;
    }

    public function uploadFile($file, $prevFileName, $fileTag, $id_user, $menu = null, $fileName = null)
    {
        $upload_path = 'assets/';
        $fileTypes = array(
            'docs' => 'pdf|docx|doc',
            'images' => 'jpg|png|jpeg|JPG|PNG|JPEG',
            'sql' => 'sql'
        );
        $allowedType = '';
        $prefix = '';
        switch ($fileTag) {
			case "user":
				$upload_path .= 'images/user';
                $allowedType = $fileTypes['images'];
				break;
			case "sign":
                $upload_path .= 'images/sign';
                $allowedType = $fileTypes['images'];
				break;
			case "docs":
                $upload_path .= 'uploads/docs/' . $menu;
                $allowedType = $fileTypes['docs'];
                $prefix = substr($menu, 6) === 'masuk' ? 'SM' : 'SK';
                $prefix .= '-' . $id_user . '-' . str_replace(' ', '_', substr($fileName, 0, 30));
				break;
            case "institution":
                $upload_path .= 'images/institution';
                $allowedType = $fileTypes['images'];
				break;
            case "sql":
                $upload_path .= 'uploads/temps';
                $allowedType = $fileTypes['images'];
                break;
			default:
				redirect(404);
				break;
		}
        
        $thisFile = $_FILES[$file]['name'];
        $new_fileName = '';
        $date = date('ymd_His');
        if ($fileTag === 'docs') {
            $new_fileName = strtoupper($fileTag) . '-' . $prefix . '-' . $date; //DOCS-SM-22-Nama_File-180325_214358
        } else {
            $new_fileName = strtoupper($fileTag) . '-' . $id_user . '-' . $date;
        }

        if (!is_dir($upload_path)) {
            mkdir('./' . $upload_path, 0777, true);
        }

        if ($thisFile) {
            $config['allowed_types'] = $allowedType;
            $config['max_size'] = 2048;
            $config['upload_path'] = './' . $upload_path . '/';
            $config['file_name'] = $new_fileName;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload($file)) {
                $oldFile = './' . $upload_path . '/' . $prevFileName;
                if (!empty($prevFileName) && $prevFileName != 'default-image.png') {
                    unlink($oldFile);
                }
                $result = array($date, $new_fileName . $this->upload->data('file_ext'));
                return $result;
            }
        }
    }

    private function executeBackup($option, $tables = null) 
    {
        $prefs['format'] = 'zip';
        $prefix = '';
        switch($option) {
            case "all":
                $prefix = '[ALL] Backup_DB_';
                $prefs['filename'] = 'full-database-backup.sql';
                break;
            case "partial":
                $prefix = '[SELECTED] Backup_DB_';
                $prefs['tables'] = $tables;
                $prefs['filename'] = 'selected-tables-backup.sql';
                break;
            default:
                redirect(404);
                return;
        }
        $backup = $this->dbutil->backup($prefs);
        if (!$backup) {
            log_message('error', 'Gagal membuat backup database.');
            show_error("Gagal membuat backup.", 500);
        }

        $dbName = $prefix . date('Y-m-d_H-i-s') . '.zip';
        force_download($dbName, $backup);
    }

    private function executeRestore()
    {

    }

    // public function preview_file()
    // {
    //     $action = $this->input->get('action');
    //     $fileName = $this->input->get('file');
    //     $filePath = './assets/uploads/docs/' . $action . '/' . $fileName;
    //     if (!file_exists($filePath)) {
    //         show_404();
    //         return;
    //     }
    //     $data['title'] = SYS_NAME;
    //     $data['file'] = base_url("v2/get-file/$action?file=" . urlencode($fileName));
    //     $this->load->view("pages/pdf_viewer", $data);
    // }

    public function get_file($action)
    {
        $fileName = $this->input->get('file');
        $filePath = FCPATH . "assets/uploads/docs/$action/" . $fileName;

        if (!file_exists($filePath)) {
            show_404();
            return;
        }

        // Set header untuk menampilkan PDF di browser
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $fileName . '"');
        readfile($filePath);
    }

    public function logout()
    {
        $userLogin = $this->session->userdata('id_user');
        if ($userLogin) {
            $this->user->updateRememberToken($userLogin, NULL);
        }
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('jabatan');
        $this->session->unset_userdata('image');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('last_time_login');
        delete_cookie('remember_token');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert" id="flashdata_message">
                Anda telah berhasil <strong>keluar</strong> dari sistem!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('v2/auth/login');
        $this->session->sess_destroy();
    }

    public function error404()
    {
        $this->load->view("errors/error-404");
    }

    public function error401()
    {
        $this->load->view("errors/error-401");
    }
}
