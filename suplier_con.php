<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier_con extends CI_Controller {

	public function index()
	{
		$this->load->view('header_sup');
		$this->load->view('suplier');
		$this->load->view('footer');
	}

	public function tambah()
	{
		$this->load->view('header_sup');
		$this->load->view('t_barang');
		$this->load->view('footer');
	}
}

/* End of file suplier_con.php */
/* Location: ./application/controllers/suplier_con.php */