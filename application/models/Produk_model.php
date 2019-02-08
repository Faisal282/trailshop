<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function getAllProduk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('brand', 'produk.brand = brand.id_brand');
		return $this->db->get()->result_array();
	}

	public function getProdukById($idProduk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('brand', 'produk.brand = brand.id_brand');
		$this->db->where('id_produk', $idProduk);
		return $this->db->get()->result_array();	
	}
	
	public function getAllBrand()
	{
		return $this->db->get('brand')->result_array();
	}

	public function tambahProduk($dataProduk)
	{
		$this->db->insert('produk', $dataProduk);
	}

	public function getAllPesanan()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('produk', 'pesanan.id_produk = produk.id_produk');
		$this->db->join('brand', 'produk.brand = brand.id_brand');
		$this->db->join('users', 'pesanan.id_user = users.id');
		return $this->db->get()->result_array();
	}

	public function updateProduk($idProduk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('id_produk', $idProduk);
		return $this->db->update('produk', [
			'nama_produk' => $this->input->post('nama_produk'),
			'jenis_produk' => $this->input->post('jenis_produk'),
			'brand' => $this->input->post('id_brand'),
			'harga' => $this->input->post('harga'),
		]);
		
	}

}

/* End of file Produk_model.php */
