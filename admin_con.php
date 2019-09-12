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
	public function form_adm()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('form_adm');
		$this->load->view('footer');
	}
	public function form_sup()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('form_sup');
		$this->load->view('footer');
	}
	public function artikel_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('artikel_ad');
		$this->load->view('footer');
	}
	public function tambah_art()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('tambah_art');
		$this->load->view('footer');
	}
	public function transaksi_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('transaksi_ad');
		$this->load->view('footer');
	}
	public function katbrg_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('katbrg_ad');
		$this->load->view('footer');
	}
	public function katart_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('katart_ad');
		$this->load->view('footer');
	}
	public function penyuluh_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('penyuluh_ad');
		$this->load->view('footer');
	}
	public function perditer_ad()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('perditer_ad');
		$this->load->view('footer');
	}
	public function form_peny()
	{
		$this->load->view('header_ad');
		$this->load->view('sidebar_ad');	
		$this->load->view('form_peny');
		$this->load->view('footer');
	}
	
}

/* End of file admin.php */
/* Location: ./application/controllers/admin_con.php */























