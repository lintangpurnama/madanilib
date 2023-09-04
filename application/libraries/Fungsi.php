<?php

class Fungsi
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $this->ci->load->model('auth_model');
        $id_user = $this->ci->session->userdata('id_user');
        $data_user = $this->ci->auth_model->get($id_user)->row();
        return $data_user;
    }
}
