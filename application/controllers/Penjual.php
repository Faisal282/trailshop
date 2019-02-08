<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Penjual_model');
		
	}
	
	public function index()
	{
		redirect('home');
	}

	public function utang()
	{
		$data['title'] = "Utang";
		$data['utang'] = $this->Penjual_model->getPelangganUtang();
		$this->load->view('template/penjual/header', $data);
		$this->load->view('template/penjual/navbar', $data);
		$this->load->view('penjual/utang', $data);
		$this->load->view('template/penjual/footer');
		
	}
	
	public function bayar()
	{
		$data['title'] = "Bayar";
		$data['bayar'] = $this->Penjual_model->getPelangganBayar();
		$this->load->view('template/penjual/header', $data);
		$this->load->view('template/penjual/navbar', $data);
		$this->load->view('penjual/bayar', $data);
		$this->load->view('template/penjual/footer');
	}

	public function menu()
	{
		$data['title'] = "Menu";
		$data['menu'] = $this->Penjual_model->getMenuPenjual();
		$this->load->view('template/penjual/header', $data);
		$this->load->view('template/penjual/navbar', $data);
		$this->load->view('penjual/menu', $data);
		$this->load->view('template/penjual/footer');
	}

	public function transaksi()
	{
		$data['title'] = "Transaksi";
		$data['transaksi'] = $this->Penjual_model->getTransaksiPenjual();
		$this->load->view('template/penjual/header', $data);
		$this->load->view('template/penjual/navbar', $data);
		$this->load->view('penjual/transaksi', $data);
		$this->load->view('template/penjual/footer');
	}

	public function orderan()
	{
		$data['title'] = "Orderan";
		$data['orderan'] = $this->Penjual_model->getPelangganUtang();
		$this->load->view('template/penjual/header', $data);
		$this->load->view('template/penjual/navbar', $data);
		$this->load->view('penjual/orderan', $data);
		$this->load->view('template/penjual/footer');
	}

	public function clearPelangganUtang($id)
	{
		$this->Penjual_model->clearPelangganUtang($id);
		redirect('penjual/orderan');
	}
}

/* End of file Penjual.php */
