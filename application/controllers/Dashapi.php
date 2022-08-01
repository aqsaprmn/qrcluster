<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashapi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }
    public function tanggal()
    {
        $month = $_POST['month'];

        $month = explode('-', $month);

        $year = $month[0];
        $month_qu = $month[1];

        $day = $_POST['day'];

        $data['tanggal'] = $this->db->query("SELECT tanggal, COUNT(kawasan) AS total FROM qr WHERE month = $month_qu and year = $year GROUP BY day ORDER BY tanggal")->result_array();

        $data['kawasan'] = $this->db->query("SELECT kawasan, COUNT(kawasan) AS total FROM qr GROUP BY kawasan")->result_array();

        $data['jam'] = $this->db->query("SELECT tanggal, jam, time, COUNT(jam) AS total FROM qr WHERE tanggal = '$day' GROUP BY jam")->result_array();

        echo json_encode($data);
    }

    public function kawasan()
    {
        $data['data'] = $this->db->query("SELECT kawasan, COUNT(kawasan) AS total FROM qr GROUP BY kawasan")->result();

        echo json_encode($data);
    }
}
