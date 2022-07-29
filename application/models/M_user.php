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
    public function inserDataCluster($table, $title, $user_ip, $type = "S1")
    {
        $data = [
            'kawasan' => $title,
            'type' => $type,
            'ip' => $user_ip,
            'waktu_scan' => date("Y-m-d H:i:s"),
            'tanggal' => date("Y-m-d"),
            'day' => date('j'),
            'month' => date('n'),
            'year' => date('Y'),
            'jam_detail' => date('H:i:s'),
            'time' => date('H:i')
        ];

        $this->db->insert($table, $data);
    }
    public function getRow($table, $where)
    {
        return $this->db->get_where($table, $where)->row_array();
    }
}
