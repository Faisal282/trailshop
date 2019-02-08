<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Pelanggan_model');
	}
	

	public function index()
	{
		redirect('home');
	}

	public function scan()
	{
		$data['title'] = "Pembayaran";
		$data['kantin'] = $this->Pelanggan_model->getAllKantin();
		$this->load->view('template/pelanggan/header', $data);
		$this->load->view('template/pelanggan/navbar', $data);
		$this->load->view('pelanggan/scan', $data);
		$this->load->view('template/pelanggan/footer');
	}

	public function bayar()
	{
		$data['title'] = "Pembayaran";
		$data['bayar'] = $this->Pelanggan_model->getBayarByIdUser();
		$this->load->view('template/pelanggan/header', $data);
		$this->load->view('template/pelanggan/navbar', $data);
		$this->load->view('pelanggan/bayar', $data);
		$this->load->view('template/pelanggan/footer');
	}
	
	public function utang()
	{
		$data['title'] = "Utang";
		$data['utang'] = $this->Pelanggan_model->getUtangByIdUser();
		$this->load->view('template/pelanggan/header', $data);
		$this->load->view('template/pelanggan/navbar', $data);
		$this->load->view('pelanggan/utang', $data);
		$this->load->view('template/pelanggan/footer');
	}

}

/* End of file Pelanggan.php */
