<?php
defined('BASEPATH') or exit('No direct script access allowed');
// define('TBL_USER', 'tbl_user');

class M_User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function getListUsers() {
        $this->db->order_by("id_user", "ASC");
        $query = $this->db->get(TBL_USER);
        return $query->result();
    }

    public function getDataUser($username)
    {
        $this->db->select('*');
        $this->db->from(TBL_USER);
        $this->db->where('username', $username);
        $sql = $this->db->get();
        $result = $sql->row();
        return $result;
    }

    public function getDataUserByToken($token) {
        return $this->db->get_where(TBL_USER, ['remember_token' => $token])->row();
    }

    public function updateDataUser($table, $primaryKey, $data)
    {
        $this->db->where($primaryKey['column'], $primaryKey['value']);
        $this->db->update($table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateLastTimeLoginUser($userID, $data = [])
    {
        $this->db->set('last_time_login', date('Y-m-d H:i:s'));
        $this->db->where('id_user', $userID);
        $this->db->update(TBL_USER, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateRememberToken($userID, $token) {
        $this->db->where('id_user', $userID);
        $this->db->update(TBL_USER, ['remember_token' => $token]);
    }














    public function listMenu($roleId)
    {
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('ROLE_ID', $roleId);
        $this->db->where('PARENTMENU_ID', null);
        $this->db->where('IS_ACTIVE', '1');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return null;
        }
    }

    public function getDataByNIK($nik)
    {
        $result = $this->db->get_where('dukcapil', ['nik' => $nik]);
        return $result->row();
    }


    public function getDataOfficer($username)
    {
        $result = $this->db->get_where('officer', ['username' => $username]);
        return $result->row();
    }

    public function registerAccount($data)
    {
        $this->db->insert('participant', $data);
    }
}
