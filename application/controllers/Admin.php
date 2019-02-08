<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Admin_model');
		$this->load->model('Produk_model');
		$this->load->model('Brand_model');
		$this->load->helper(array('form', 'url'));
		
		if ($_SESSION['status'] != 'logged in') {
			redirect('login');
			if ($_SESSION['role'] != 2) {
				redirect('home');
			}
		}
	}

	public function index()
	{
		redirect('home');
	}

	public function pesanan()
	{
		$data['pesanan'] = $this->Produk_model->getAllPesanan();
		$this->load->view('template/admin/header');
		$this->load->view('admin/pesanan', $data);
		$this->load->view('template/admin/footer');
	}

	public function updateView($controller, $id)
	{
		if ($controller == 'produk') {
			$data['produk'] = $this->Produk_model->getProdukById($id);
			$data['brand'] = $this->Brand_model->getAllBrand();
			$this->load->view('template/admin/header');
			$this->load->view('admin/updateProduk', $data);
			$this->load->view('template/admin/footer');
		} elseif($controller == 'brand') {
			$data['brand'] = $this->Brand_model->getBrandById($id);
			$this->load->view('template/admin/header');
			$this->load->view('admin/updateBrand', $data);
			$this->load->view('template/admin/footer');
		}
	}

	public function updateProduk()
	{
		$this->form_validation->set_rules('id_produk', 'id_produk', 'required');
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('jenis_produk', 'jenis_produk', 'required');
		$this->form_validation->set_rules('id_brand', 'id_brand', 'required');

		if ($this->form_validation->run() == TRUE ) {
			$this->Produk_model->updateProduk($this->input->post('id_produk'));
			$this->session->set_flashdata('pesan', 'berhasil update produk');
			redirect('home');
		} else {
			$this->session->set_flashdata('pesan', 'gagal update produk');
			redirect('home');
		}
	}

	public function updateBrand()
	{
		$this->form_validation->set_rules('id_brand', 'id_brand', 'required');
		$this->form_validation->set_rules('nama_brand', 'nama_brand', 'required');

		if ($this->form_validation->run() == TRUE ) {
			$this->Brand_model->updateBrand($this->input->post('id_brand'));
			$this->session->set_flashdata('pesan', 'berhasil update brand');
			redirect('admin/brand');
		} else {
			$this->session->set_flashdata('pesan', 'gagal update brand');
			redirect('admin/brand');
		}
	}

	public function deleteProduk($idProduk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('id_produk', $idProduk);
		$this->db->delete('produk');
		$this->session->set_flashdata('pesan', 'hapus produk berhasil');
		redirect('home');
	}

	public function deleteBrand($idBrand)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('id_brand', $idBrand);
		$this->db->delete('brand');
		$this->session->set_flashdata('pesan', 'hapus brand berhasil');
		redirect('admin/brand');
	}

	public function brand()
	{
		$data['brand'] = $this->Brand_model->getAllBrand();
		$this->load->view('template/admin/header');
		$this->load->view('admin/brand', $data);
		$this->load->view('template/admin/footer');
	}

	public function add_brand_bayar($id)
	{
		$this->Brand_model->add_brand_bayar($id);
		redirect('admin/pesanan','refresh');
	}

	public function hapus_brand_bayar($id)
	{
		$this->Brand_model->hapus_brand_bayar($id);
		redirect('admin/pesanan','refresh');
	}

	public function tambahBrand()
	{
		$nama_brand = $this->input->post('nama_brand');
		$gambar = $this->input->post('nama_brand');

		$data = array(
			'nama_brand' => $nama_brand, 
			'gambar' => $gambar,
		);
		
		$this->Brand_model->addBrandNew($data);
		// $gambar = $this->aksi_upload();
		
		redirect('admin/brand','refresh');
	}

	public function aksi_upload()
	{
		$config['upload_path']          = './assets/images/brand/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('pesan' => $this->upload->display_errors());
			
			redirect('home','refresh');
			
		}else{
			$data = array('pesan' => $this->upload->data());

			redirect('home','refresh');

		}
	}

}
