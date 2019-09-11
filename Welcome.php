<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	public function bisnis()
	{
		$this->load->view('header');
		$this->load->view('bisnis');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail_p');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	public function edu()
	{
		$this->load->view('header');
		$this->load->view('edu');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	public function artikel()
	{
		$this->load->view('header');
		$this->load->view('artikel');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
	public function form_art()
	{
		$this->load->view('header');
		$this->load->view('form_art');
		$this->load->view('sidebar');
		$this->load->view('footer');
	}
}