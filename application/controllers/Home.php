<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['status'] != 'logged in') {
			redirect('login');
		}
		$this->load->model('Produk_model');
	}
	

	public function index()
	{
		if ($_SESSION['role'] == 1) { //view untuk admin
			$data['title'] = "Utama";
			$data['produk'] = $this->Produk_model->getAllProduk();
			$data['brand'] = $this->Produk_model->getAllBrand();
			$this->load->view('template/admin/header');
			$this->load->view('home/index', $data);
			$this->load->view('template/admin/footer');
		} else { //view untuk penjual
			$data['title'] = "Utama";
			$this->load->view('template/user/header');
			$this->load->view('home/index');
			$this->load->view('template/user/footer');
		}
	}

}