<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cluster_S2 extends CI_Controller
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
    public function TERRACE_HILL()
    {
        $data['title'] = 'TERRACE HILL';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function ATMOSPHERE()
    {
        $data['title'] = 'ATMOSPHERE';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function THE_BREZEE()
    {
        $data['title'] = 'THE BREZEE';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function RIVERVIEW()
    {
        $data['title'] = 'RIVERVIEW';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");

        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function PINE_FOREST()
    {
        $data['title'] = 'PINE FOREST';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
    public function GREEN_VALLEY()
    {
        $data['title'] = 'GREEN VALLEY';
        $user_ip = $this->get_client_ip();

        $this->M_user->inserDataCluster('qr', $data['title'], $user_ip, "S2");
        $this->load->view('template/header', $data);
        $this->load->view('cluster/cluster', $data);
        $this->load->view('template/footer', $data);
    }
}
