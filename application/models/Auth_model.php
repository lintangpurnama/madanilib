<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['password']));

        $query = $this->db->get();
        return $query;
    }
    //mengambil data id untuk nama
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
