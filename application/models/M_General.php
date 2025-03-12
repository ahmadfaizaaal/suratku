<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_General extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
    }

    public function countDataTable($tableName)
    {
        $result = $this->db->count_all($tableName);
        return $result;
    }

    public function getListTables() 
    {
        $tables = $this->db->list_tables();
        return $tables;
    }
}
