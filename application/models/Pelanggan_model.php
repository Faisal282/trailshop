<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public function getBayarByIdUser()
	{
		// var_dump($_SESSION);die;
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->where('nota.id_user', $_SESSION['id']); // where penjual sama dengan session
		$this->db->where('status', 1); // jika status 1 maka sudah bayar
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		return $this->db->get()->result_array();
	}

	public function getUtangByIdUser()
	{
		// var_dump($_SESSION);die;
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->where('nota.id_user', $_SESSION['id']); // where penjual sama dengan session
		$this->db->where('status', 0); // jika status 0 maka masih utang
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		return $this->db->get()->result_array();
	}

	public function getAllKantin()
	{
		return $this->db->get('penjual')->result_array();
	}
	
	public function FunctionName(Type $var = null)
	{
		# code...
	}

}

/* End of file Pelanggan_model.php */
