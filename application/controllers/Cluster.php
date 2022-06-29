<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cluster extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }
    public function index()
    {
        $this->load->view('404');
    }
    private function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    public function MEDITERANIA_GOLF_HILL()
    {
        $user_ip = $this->get_client_ip;
        $data['title'] = 'MEDITERANIA GOLF HILL';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function BESAKIH()
    {
        $data['title'] = 'BESAKIH';
        $user_ip = $this->get_client_ip();
        $data['sql'] = [
            'kawasan' => $data['title'],
            'ip' => $user_ip,
            'waktu_scan' => date("Y-m-d H:i:s"),
            'tanggal' => date("Y-m-d"),
            'day' => date('j'),
            'month' => date('n'),
            'year' => date('Y'),
            'jam_detail' => date('H'),
            'jam' => date('H')
        ];

        $this->M_user->inserDataCluster('qr', $data['sql']);

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PARAHYANGAN_GOLF()
    {
        $data['title'] = 'PARAHYANGAN GOLF';
        $user_ip = $this->get_client_ip();
        $data['sql'] = [
            'kawasan' => $data['title'],
            'ip' => $user_ip,
            'waktu_scan' => date("Y-m-d H:i:s"),
            'tanggal' => date("Y-m-d"),
            'day' => date('j'),
            'month' => date('n'),
            'year' => date('Y'),
            'jam_detail' => date('H'),
            'jam' => date('H')
        ];

        $this->M_user->inserDataCluster('qr', $data['sql']);

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function UDAYANA()
    {
        $data['title'] = 'UDAYANA';
        $user_ip = $this->get_client_ip();
        $data['sql'] = [
            'kawasan' => $data['title'],
            'ip' => $user_ip,
            'waktu_scan' => date("Y-m-d H:i:s"),
            'tanggal' => date("Y-m-d"),
            'day' => date('j'),
            'month' => date('n'),
            'year' => date('Y'),
            'jam_detail' => date('H'),
            'jam' => date('H')
        ];

        $this->M_user->inserDataCluster('qr', $data['sql']);

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function LEGIAN()
    {
        $data['title'] = 'LEGIAN';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function IMPERIAL_GOLF_ESTATE()
    {
        $data['title'] = 'IMPERIAL GOLF ESTATE';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function TAMPAK_SIRING()
    {
        $data['title'] = 'TAMPAK SIRING';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function LAVANOISE_VILLAGE()
    {
        $data['title'] = 'LAVANOISE VILLAGE';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MEDITERANIA_GOLF_2()
    {
        $data['title'] = 'MEDITERANIA GOLF 2';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function RUKO_PLAZA_NIAGA_1()
    {
        $data['title'] = 'RUKO PLAZA NIAGA_1';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MEDITERANIA_GOLF_1()
    {
        $data['title'] = 'MEDITERANIA GOLF 1';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function VENESIA()
    {
        $data['title'] = 'VENESIA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PASADENA()
    {
        $data['title'] = 'PASADENA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MOUNTAIN_VIEW()
    {
        $data['title'] = 'MOUNTAIN VIEW';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function SAKURA()
    {
        $data['title'] = 'SAKURA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PASAR_BERSIH()
    {
        $data['title'] = 'PASAR BERSIH';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function BUKIT_GOLF_HIJAU()
    {
        $data['title'] = 'BUKIT GOLF HIJAU';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PUNCAK_MAS()
    {
        $data['title'] = 'PUNCAK MAS';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function EMERALD_GOLF()
    {
        $data['title'] = 'EMERALD GOLF';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function VICTORIA()
    {
        $data['title'] = 'VICTORIA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function CASABLANCA()
    {
        $data['title'] = 'CASABLANCA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function ANDALUSIA()
    {
        $data['title'] = 'ANDALUSIA';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function SIERRA_MADRE()
    {
        $data['title'] = 'SIERRA MADRE';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function ENGLAND_PARK()
    {
        $data['title'] = 'ENGLAND PARK';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function YUNANI()
    {
        $data['title'] = 'YUNANI';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function HILL_TOP()
    {
        $data['title'] = 'HILL TOP';

        $this->M_user->inserDataCluster('qr', $data['title']);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
}
