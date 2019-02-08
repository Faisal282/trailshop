<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAllPenjual()
	{
		$this->db->select('*');
		$this->db->from('penjual');
		$this->db->join('kelas', 'penjual.id_kelas = kelas.id_kelas');
		$this->db->where([
			'penjual.id_kelas' => 39,
			'kelas.nama_kelas' => 'penjual'
		]);
		return $this->db->get()->result_array();	
	}

	public function getAllPelanggan()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('kelas', 'users.id_kelas = kelas.id_kelas');
		$this->db->where([
			'role' => 0,
		]);
		return $this->db->get()->result_array();	
	}

	public function getAllMenu()
	{
		$this->db->select('*');
		$this->db->from('menu');
		$this->db->join('penjual', 'menu.id_penjual = penjual.id_penjual');
		return $this->db->get()->result_array();	
	}

	public function getAllNota()
	{
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->join('users', 'nota.id_user = users.id');
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		$this->db->join('penjual', 'menu.id_penjual = penjual.id_penjual');
		// $this->db->join('users', 'menu.id_penjual = users.id');
		
		return $this->db->get()->result_array();	
	}

}

/* End of file Admin_model.php */
