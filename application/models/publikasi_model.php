<?php
defined('BASEPATH') or exit('No direct script access allowed');

class publikasi_model extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('publikasi');
    }
    function getdata($data)
    {
        $this->db->insert('publikasi', $data);
    }
}
