<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_model extends CI_Model {

	public function getAllBrand()
	{
		return $this->db->get('brand')->result_array();
	}

	public function add_brand_bayar($id)
	{
		$this->db->where('id_nota', $id);
		$this->db->update('pesanan', ['status' => 1]);
	}

	public function hapus_brand_bayar($id)
	{
		$this->db->where('id_nota', $id);
		$this->db->update('pesanan', ['status' => 0]);
	}

	public function addBrandNew($data)
	{
		$this->db->insert('brand', $data);
	}

	public function getBrandById($idBrand)
	{
		return $this->db->get_where('brand', ['id_brand' => $idBrand])->result_array();
	}

	public function updateBrand($idBrand)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('id_brand', $idBrand);
		return $this->db->update('brand', [
			'nama_brand' => $this->input->post('nama_brand'),
			'gambar' => $this->input->post('nama_brand'),
		]);
		
	}

}

/* End of file Brand_model.php */
