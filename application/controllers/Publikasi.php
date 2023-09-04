<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("publikasi_model");
        $this->load->library('form_validation', 'session', 'upload');
        $this->load->helper('form', 'url');
    }

    public function index()
    {
        $data["title"] = "Publikasi | Madani Library";
        $data["publikasi"] = $this->publikasi_model->tampil_data()->result();
        // $data["publikasi"] = $this->Publikasi_model->getAll();
        $this->load->view('template/header', $data);
        $this->load->view('admin/Publikasi', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $data["title"] = "Tambah Data Publikasi";
        $this->load->view('template/header', $data);
        $this->load->view('admin/publikasi/tambah_data',  array('error' => 'error'));
        $this->load->view('template/footer');
    }

    // public function create()
    // {
    //     $judul = $this->input->post('judul');
    //     $kategori = $this->input->post('kategori');
    //     $tag = $this->input->post('tag');


    //     $data = array(
    //         'judul' => $judul,
    //         'kategori' => $kategori,
    //         'tag' => $tag,
    //     );

    //     $config['upload_path']          = './file/publikasi/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = '';
    //     $config['max_width']            = '';
    //     $config['max_height']           = '';
    //     $config['file_name']             = $judul;

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('file')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         echo 'error';
    //         // $this->add($error);
    //     } else {
    //         $upload_data = $this->upload->data();
    //         $file_name = $upload_data['file_name'];
    //         $data['foto'] = 'file/publikasi/' . $file_name;
    //         if ($this->db->insert('publikasi', $data)) {
    //             $this->session->set_flashdata('message', 'Data telah disimpan');
    //             redirect('publikasi/add');
    //         }
    //     }
    // }

    // function tambahdata()
    // {
    //     $judul = $this->input->post('judul');
    //     $kategori = $this->input->post('kategori');
    //     $tag = $this->input->post('tag');

    //     $data = array(
    //         'judul' => $judul,
    //         'kategori' => $kategori,
    //         'tag' => $tag
    //     );
    //     // echo '<pre>';
    //     // print_r($data);
    //     // echo '</pre>';
    //     $this->publikasi_model->getdata($data);
    //     redirect('publikasi');
    // }
    public function tambahdata()
    {
        // $config['upload_path']          = './gambar/';
        // $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 10000;
        // $config['max_height']           = 10000;

        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('userfile')) {
        //     echo "gagal";
        // } else {
        //     $gambar = $this->upload->data();
        //     $gambar = $gambar['file_name'];
        //     $judul = $this->input->post('judul');
        //     $kategori = $this->input->post('kategori');
        //     $tag = $this->input->post('tag');

        //     $data = array(
        //         'judul' => $judul,
        //         'kategori' => $kategori,
        //         'tag' => $tag,
        //         'gambar' => $gambar
        //     );
        //     $this->db->insert('publikasi', $data);
        // }

        $foto = $_FILES['gambar']['name'];
        if ($foto) {
            $config['upload_path']          = './gambar/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG';
            $config['max_size']             = '10000';
            $config['encrypt_name']             = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) //sesuai name yg ada di form
            {
                echo $this->upload->display_errors();
            } else {
                $data['foto'] = $this->upload->data('file_name'); //ambil nama file
            }
        }
        // $this->db->insert('publikasi', $data);
    }
}
// $this->session->set_flashdata('pesan', '<div class="alert alert-succes" role="alert">data berhasil di tambahkan </div>');
// redirect('publikasi');
