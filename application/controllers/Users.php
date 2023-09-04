<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function index()
    {
        check_not_login();
        $this->load->model('user_model');
        $data["title"] = "User | Madani Library";
        $data["user"] = $this->user_model->tampil_data()->result();

        $this->load->view('template/header');
        $this->load->view('admin/users', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password1', 'password1', 'required');
        $this->form_validation->set_rules('password2', 'password2', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

        if ($this->form_validation->run() == false) {
            redirect('users');
        } else {
            echo 'berhasil';
        }
    }
}
