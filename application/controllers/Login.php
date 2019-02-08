<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	
	public function index()
	{
		if ($this->session->userdata('status') == 'logged in') {
			redirect('home');
		}

		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Login";
			$this->load->view('login/login', $data);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$dataLogin = array(
				'email' => $email,
				'password' => $password,
			);
			
			// cek apakah admin
			$cek_user = $this->Login_model->cekUser($dataLogin);
			if ($cek_user->num_rows() > 0) {
				if ($cek_user->row_array()['role'] == 2) { //akses admin
					$sess_admin = array(
						'akses' => 'admin', 
						'nama'	=> $cek_user->row_array()['nama'],
						'email' => $cek_user->row_array()['email'],
						'telp' => $cek_user->row_array()['telp'],
						'role' => $cek_user->row_array()['role'],
						'status' => 'logged in',
					);
					
					$this->session->set_userdata( $sess_admin );
					
					redirect('home');
					
				} else { // akses user
					$sess_admin = array(
						'akses' => 'pelanggan',
						'nama'	=> $cek_user->row_array()['nama'],
						'email' => $cek_user->row_array()['email'],
						'telp' => $cek_user->row_array()['telp'],
						'role' => $cek_user->row_array()['role'],
						'id' => $cek_user->row_array()['id'],
						'status' => 'logged in',
					);	
					
					$this->session->set_userdata( $sess_admin );
					
					redirect('home');
				}
				
			} else { 
				$url = base_url('');
				$this->session->set_flashdata('msg', 'username atau password salah');
				redirect("$url");
			}

		}		
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('telp', 'telp', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		
		if ($this->form_validation->run() == TRUE) {
			$this->Login_model->register();
			redirect('login');
		} else {
			$this->session->set_flashdata('pesan', 'data gagal ditambahkan');
			return redirect('login/index');
		}
		
	}
	
	public function profil()
	{
		$data['title'] = "Profil";
		if ($_SESSION['role'] == 2) {
			$this->load->view('home/profil');
		} elseif($_SESSION['role'] == 1) {
			$this->load->view('home/profil');
		} else {
			$this->load->view('home/profil');
		}
	}

	public function logout()
	{
		unset($_SESSION);
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}