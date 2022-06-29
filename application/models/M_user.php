<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getDataAll($table)
    {
        return $this->db->get($table)->result_array();
    }
    public function getDataWhereAll($table, $where)
    {
        return $this->db->get_where($table, $where)->result_array();
    }
    public function inserDataCluster($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
