<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('Users_model');
    }
    

    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('template/header', $data);
        $this->load->view('main_user');
        $this->load->view('template/footer');
    }
    public function about()
    {
        $data['judul'] = 'About';
        $this->load->view('template/header', $data);
        $this->load->view('about_view');    
        $this->load->view('template/footer');
        
    }
    public function product()
    {
        $data['judul'] = 'Product';
        $this->load->view('template/header', $data);
        $this->load->view('product_view');    
        $this->load->view('template/footer');
    }
    public function store()
    {
        $data['judul'] = 'Store';
        $data['motor'] = $this->Users_model->getAllProduk();
        $this->load->view('template/user/header', $data);
        $this->load->view('users/store');    
        $this->load->view('template/user/footer');
    }
    
    public function cart()
    {
        $data['judul'] = 'Store';
        $data['motor'] = $this->Users_model->getAllProduk();
        $data['pesanan'] = $this->Users_model->getAllPesananById();
        $this->load->view('template/user/header', $data);
        $this->load->view('users/cart');    
        $this->load->view('template/user/footer');
    }

    public function beliBarang($idBarang)
    {
        $this->Users_model->insertPesanan($idBarang);
        redirect('users/store','refresh');
    }

}

/* End of file Users.php */

?>