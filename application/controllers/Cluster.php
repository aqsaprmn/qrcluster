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
        $data['title'] = 'MEDITERANIA GOLF HILL';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function BESAKIH()
    {
        $data['title'] = 'BESAKIH';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PARAHYANGAN_GOLF()
    {
        $data['title'] = 'PARAHYANGAN GOLF';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function UDAYANA()
    {
        $data['title'] = 'UDAYANA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function LEGIAN()
    {
        $data['title'] = 'LEGIAN';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function IMPERIAL_GOLF_ESTATE()
    {
        $data['title'] = 'IMPERIAL GOLF ESTATE';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function TAMPAK_SIRING()
    {
        $data['title'] = 'TAMPAK SIRING';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function LAVANOISE_VILLAGE()
    {
        $data['title'] = 'LAVANOISE VILLAGE';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MEDITERANIA_GOLF_2()
    {
        $data['title'] = 'MEDITERANIA GOLF 2';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function RUKO_PLAZA_NIAGA_1()
    {
        $data['title'] = 'RUKO PLAZA NIAGA 1';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MEDITERANIA_GOLF_1()
    {
        $data['title'] = 'MEDITERANIA GOLF 1';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function VENESIA()
    {
        $data['title'] = 'VENESIA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PASADENA()
    {
        $data['title'] = 'PASADENA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function MOUNTAIN_VIEW()
    {
        $data['title'] = 'MOUNTAIN VIEW';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function SAKURA()
    {
        $data['title'] = 'SAKURA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PASAR_BERSIH()
    {
        $data['title'] = 'PASAR BERSIH';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function BUKIT_GOLF_HIJAU()
    {
        $data['title'] = 'BUKIT GOLF HIJAU';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PUNCAK_MAS()
    {
        $data['title'] = 'PUNCAK MAS';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function EMERALD_GOLF()
    {
        $data['title'] = 'EMERALD GOLF';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function VICTORIA()
    {
        $data['title'] = 'VICTORIA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function CASABLANCA()
    {
        $data['title'] = 'CASABLANCA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function ANDALUSIA()
    {
        $data['title'] = 'ANDALUSIA';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function SIERRA_MADRE()
    {
        $data['title'] = 'SIERRA MADRE';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function ENGLAND_PARK()
    {
        $data['title'] = 'ENGLAND PARK';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function YUNANI()
    {
        $data['title'] = 'YUNANI';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function HILL_TOP()
    {
        $data['title'] = 'HILL TOP';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip);
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
}
