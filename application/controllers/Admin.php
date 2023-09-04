<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// parent::__construct();
		check_not_login();
		$this->load->view('template/header');
		$this->load->view('admin/index');
		$this->load->view('template/footer');
	}
}
