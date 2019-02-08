<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function getAllProduk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('brand', 'produk.brand = brand.id_brand');
		return $this->db->get()->result_array();
	}

	public function insertPesanan($idBarang)
	{
		return $this->db->insert('pesanan', [
			'id_user' => $_SESSION['id'],
			'id_produk' => $idBarang,
			'qty' => 1,
			'created_at' => date('Y-m-d G:i:s'),
		]);
		
	}

	public function getAllPesananById()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('produk', 'pesanan.id_produk = produk.id_produk');
		$this->db->join('brand', 'produk.brand = brand.id_brand');
		$this->db->where('id_user', $_SESSION['id']);
		return $this->db->get()->result_array();
	}

}

/* End of file Users_model.php */
