<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{

    function tampil_data()
    {
        return $this->db->get('user');
    }
}
