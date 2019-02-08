<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function cekUser($dataLogin)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($dataLogin);
		return $this->db->get();
	}

	public function cekPenjual($dataLogin)
	{
		$this->db->select('*');
		$this->db->from('penjual');
		$this->db->join('kelas', 'penjual.id_kelas = kelas.id_kelas');
		$this->db->where($dataLogin);
		return $this->db->get();
	}

	public function register()
	{
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$dataRegister = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'telp' => $telp,
			'email' => $email,
			'password' => $password
		);

		$this->db->insert('users', $dataRegister);
	}

	public function dataKelas()
	{
		return $this->db->get('kelas', 37, 1)->result_array();
	}
}