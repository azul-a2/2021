<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{    
    function __construct(){
		parent::__construct();		
		$this->load->model('Produk_model');
        $data['title'] = "Jual Beli Laku";
        $data['date'] = date('Y');
	}

    public function index()
    {
       
        $data['product'] = $this->Produk_model->tampil_data()->result();
        //$data['user'] = $this->model;
        
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

   
}