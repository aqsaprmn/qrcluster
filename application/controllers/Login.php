<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_user');
    }
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('admin/login', $data);
    }
    public function go()
    {
        $username = htmlspecialchars(trim($this->input->post('username', true)));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->M_user->getRow('user',  ['username' => $username]);
        // var_dump($user['password']);
        // exit;
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $userData = [
                    'username' => $user['username'],
                    'token' => hash('sha256', rand(1, 10000))
                ];
                $this->session->set_userdata($userData);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message',  '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password Salah
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message',  '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                User tidak terdaftar
            </div>');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('token');
        $this->session->set_flashdata('message',  '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Log out Sukses
                </div>');
        redirect('login');
    }
}
