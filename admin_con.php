<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_con extends CI_Controller {

	public function index()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');
		$this->load->view('admin');
		$this->load->view('footer');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin_con.php */