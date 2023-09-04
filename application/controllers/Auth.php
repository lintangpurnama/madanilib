<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        check_already_login();
        $this->load->view('auth/login');
    }

    public function proses_login()
    {
        $post = $this->input->post(NULL, TRUE);
        if (isset($post['login'])) {
            $this->load->model('auth_model');
            $query = $this->auth_model->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id_user' => $row->id_user,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                // redirect('admin');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible show fade">
                Username atau Password Anda Salah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
                redirect('auth');
                // echo "<script>
                // alert('anda gagal');
                // window.location='" . site_url('auth') . "'
                // </script>";
            }
        }
    }


    // if ($this->form_validation->run() === FALSE) {
    //     // Jika validasi gagal atau halaman pertama kali diakses, tampilkan halaman login
    //     $this->load->view('login_view');
    // } else {
    //     // Jika validasi berhasil, cek informasi login ke database
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     $user = $this->User_model->get_user_by_username($username);

    //     if ($user && password_verify($password, $user['password'])) {
    //         // Jika informasi login cocok, buat sesi pengguna dan redirect ke halaman dashboard
    //         $user_data = array(
    //             'user_id' => $user['id'],
    //             'username' => $user['username'],
    //             'logged_in' => true
    //         );

    //         $this->session->set_userdata($user_data);
    //         redirect('dashboard'); // Ganti 'dashboard' dengan halaman yang sesuai
    //     } else {
    //         // Jika informasi login tidak cocok, tampilkan pesan kesalahan
    //         $this->session->set_flashdata('login_failed', 'Login failed. Invalid username or password.');
    //         redirect('login');
    //     }
    // }

    public function regist()
    {
        $this->load->view('auth/regist');
    }

    public function do_register()
    {
        $this->load->model('user_model');

        // Validate the form data (you can use CodeIgniter's form validation library)

        $data = array(
            'username' => $this->input->post('nama_user'),
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password'), PASSWORD_BCRYPT), // Hash the password before storing it
            'jabatan' => $this->input->post('jabatan'),
            'status' => $this->input->post('status'),
            'level' => $this->input->post('level')

        );

        $this->user_model->register_user($data);

        // Redirect to a success page or display a success message
    }

    public function forgot()
    {
        $this->load->view('auth/forgot');
    }
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
// alert
// $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
// <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
// <h4><i class="icon fa fa-check"></i> Data berhasil di Update</h4>

// </div>');