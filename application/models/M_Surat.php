<?php
defined('BASEPATH') or exit('No direct script access allowed');
// define('TBL_SURAT_MASUK', 'tbl_surat_masuk');
// define('TBL_SURAT_KELUAR', 'tbl_surat_keluar');
// define('TBL_KLASIFIKASI', 'tbl_klasifikasi_new');

class M_Surat extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function getRekapSuratMasukPerBulan($tahun = null)
    {
        $this->db->select("MONTH(tgl_diterima) AS bulan, COUNT(*) AS jumlah_surat");
        $this->db->from(TBL_SURAT_MASUK);
        if (!empty($tahun)) {
            $this->db->where("YEAR(tgl_diterima)", $tahun);
        }
        $this->db->group_by("MONTH(tgl_diterima)");
        $this->db->order_by("MONTH(tgl_diterima)", "ASC");

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getRekapSuratKeluarPerBulan($tahun = null)
    {
        $this->db->select("MONTH(tgl_catat) AS bulan, COUNT(*) AS jumlah_surat");
        $this->db->from(TBL_SURAT_KELUAR);
        if (!empty($tahun)) {
            $this->db->where("YEAR(tgl_catat)", $tahun);
        }
        $this->db->group_by("MONTH(tgl_catat)");
        $this->db->order_by("MONTH(tgl_catat)", "ASC");

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }
    
    public function getDataTahunSuratMasuk() {
        $this->db->select("DISTINCT YEAR(tgl_diterima) AS tahun");
        $this->db->from(TBL_SURAT_MASUK);
        $this->db->order_by("tahun", "DESC");

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getDataTahunSuratKeluar() {
        $this->db->select("DISTINCT YEAR(tgl_diterima) AS tahun");
        $this->db->from(TBL_SURAT_MASUK);
        $this->db->order_by("tahun", "DESC");

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getSifatSuratMasuk($tahun = null)
    {
        $this->db->select("sifat, COUNT(sifat) AS jumlah");
        $this->db->from(TBL_SURAT_MASUK);
        if (!empty($tahun)) {
            $this->db->where("YEAR(tgl_diterima)", $tahun);
        }
        $this->db->group_by("sifat");
        $this->db->order_by("FIELD(sifat, 'Biasa', 'Segera', 'Penting', 'Rahasia')", '', false);

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getSifatSuratKeluar($tahun = null)
    {
        $this->db->select("sifat, COUNT(sifat) AS jumlah");
        $this->db->from(TBL_SURAT_KELUAR);
        if (!empty($tahun)) {
            $this->db->where("YEAR(tgl_catat)", $tahun);
        }
        $this->db->group_by("sifat");
        $this->db->order_by("FIELD(sifat, 'Biasa', 'Segera', 'Penting', 'Rahasia')", '', false);

        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function checkIsExistKlasifikasi($kode) {
        $result = $this->db->get_where(TBL_KLASIFIKASI, ['kode' => $kode]);
        if ($result->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getDetailKlasifikasi($id)
    {
        return $this->db->get_where(TBL_KLASIFIKASI, ['id_klasifikasi' => $id])->row();
    }

    public function getParentKlasifikasi()
    {
        $this->db->select('id_klasifikasi, kode, nama');
        $this->db->from(TBL_KLASIFIKASI);
        $this->db->where('id_parent', 0);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getChildKlasifikasi($kode)
    {
        $query = "WITH RECURSIVE klasifikasi_tree AS (
                    SELECT id_klasifikasi, id_parent, kode, nama
                    FROM tbl_klasifikasi_new
                    WHERE kode = '$kode'

                    UNION ALL

                    SELECT tk.id_klasifikasi, tk.id_parent, tk.kode, tk.nama
                    FROM tbl_klasifikasi_new tk
                    INNER JOIN klasifikasi_tree kt ON tk.id_parent = kt.id_klasifikasi
                )
                SELECT * FROM klasifikasi_tree";
        $result = $this->db->query($query);
        if ($result->num_rows() > 1) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getListKlasifikasi($excludeCode = null)
    {
        $query = "SELECT 
                    id_klasifikasi, 
                    id_parent, 
                    kode, 
                    CASE 
                        WHEN kode NOT LIKE '%.%' AND kode REGEXP '^[A-Z]+[0-9]+$' THEN 2
                        WHEN kode NOT LIKE '%.%' THEN 1
                        ELSE LENGTH(kode) - LENGTH(REPLACE(kode, '.', '')) + 2
                    END AS level
                FROM tbl_klasifikasi_new
                HAVING level < 4";
        if (!empty($excludeCode)) {
            $query .= " AND kode != '$excludeCode'";
        }
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getSubKlasifikasi($parent)
    {
        $query = "WITH RECURSIVE klasifikasi_tree (id_klasifikasi, id_parent, kode, nama, uraian, level, path) AS (
                        SELECT 
                            id_klasifikasi, 
                            id_parent, 
                            kode, 
                            nama,
                            uraian, 
                            1 AS level, 
                            kode AS path
                        FROM tbl_klasifikasi_new
                        WHERE kode = '$parent'

                        UNION ALL

                        SELECT 
                            tk.id_klasifikasi, 
                            tk.id_parent, 
                            tk.kode, 
                            tk.nama,
                            tk.uraian, 
                            kt.level + 1 AS level,
                            CONCAT(kt.path, ' > ', tk.kode) AS path
                        FROM tbl_klasifikasi_new tk
                        INNER JOIN klasifikasi_tree kt ON tk.id_parent = kt.id_klasifikasi
                    )
                    SELECT 
                        CONCAT(REPEAT('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', level - 1), '├─── ', kode) AS tree_view, 
                        nama,
                        uraian,
                        id_klasifikasi,
                        id_parent,
                        kode,
                        level
                    FROM klasifikasi_tree
                    ORDER BY path;";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function insertDataKlasifikasi($data)
    {
        $this->db->insert(TBL_KLASIFIKASI, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateDataKlasifikasi($primaryKey, $data)
    {
        $this->db->where($primaryKey['column'], $primaryKey['value']);
        $this->db->update(TBL_KLASIFIKASI, $data);
        if ($this->db->affected_rows() > 0 || $this->db->error()['code'] == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDataKlasifikasi($idKlasifikasi)
    {
        $this->db->where('id_klasifikasi', $idKlasifikasi);
        $this->db->delete(TBL_KLASIFIKASI);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
