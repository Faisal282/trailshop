<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Produk_model');
	}
	

	public function index()
	{
		
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('jenis_produk', 'jenis_produk', 'required');
		$this->form_validation->set_rules('brand', 'brand', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', 'gagal tambah data karena field ada yang kurang');
			redirect('home');
		} else {
			$dataProduk = array(
				'nama_produk' => $this->input->post('nama_produk'), 
				'jenis_produk' => $this->input->post('jenis_produk'), 
				'brand' => $this->input->post('brand'), 
			);

			$this->Produk_model->tambahProduk($dataProduk);
			$this->session->set_flashdata('pesan', 'berhasil tambah data');
			redirect('home');
		}
		
	}

}

/* End of file Produk.php */
