<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['visitor'] = $this->M_user->getDataAll('qr');

        $this->load->view('template/dashhead', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/dashfooter');
    }
}
