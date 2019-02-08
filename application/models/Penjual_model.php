<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual_model extends CI_Model {

	public function getPelangganUtang()
	{
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->where('menu.id_penjual', $_SESSION['id_penjual']); // where penjual sama dengan session
		$this->db->where('status', 0); // jika status 0 maka utang
		$this->db->join('users', 'nota.id_user = users.id');
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		return $this->db->get()->result_array();
	}

	public function getPelangganBayar()
	{
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->where('menu.id_penjual', $_SESSION['id_penjual']); // where penjual sama dengan session
		$this->db->where('status', 1); // jika status 1 maka sudah bayar
		$this->db->join('users', 'nota.id_user = users.id');
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		return $this->db->get()->result_array();
	}

	public function getMenuPenjual()
	{
		return $this->db->get_where('menu', ['id_penjual' => $_SESSION['id_penjual']])->result_array();
	}

	public function getTransaksiPenjual()
	{
		$this->db->select('*');
		$this->db->from('nota');
		$this->db->join('users', 'nota.id_user = users.id');
		$this->db->join('menu', 'nota.id_menu = menu.id_menu');
		$this->db->where('menu.id_penjual', $_SESSION['id_penjual']); // where penjual sama dengan session
		return $this->db->get()->result_array();
	}

	public function clearPelangganUtang($id)
	{
		$data = array('status' => 1);
		$this->db->update('nota', $data, array('id_nota' => $id));
	}

}

/* End of file Penjual_model.php */
