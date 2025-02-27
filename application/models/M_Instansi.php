<?php
defined('BASEPATH') or exit('No direct script access allowed');
// define('TBL_INSTANSI', 'tbl_instansi');

class M_Instansi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function getDataInstansi($id_instansi)
    {
        $this->db->select('*');
        $this->db->from(TBL_INSTANSI);
        $this->db->where('id_instansi', $id_instansi);
        $sql = $this->db->get();
        $result = $sql->row();
        return $result;
    }

    public function updateDataInstansi($table, $primaryKey, $data)
    {
        $this->db->where($primaryKey['column'], $primaryKey['value']);
        $this->db->update($table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
