<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller
{    
    function __construct(){
		parent::__construct();		
		$this->load->model('Produk_model');
        $this->load->model('HomeModel');
	}

    public function index()
    {
        $data['title'] = "Jual Beli Laku";
        $data['date'] = date('Y');
        $data['product'] = $this->Produk_model->tampil_data()->result();
        $data['region'] = $this->HomeModel->tampil_region()->result();
        $data['kategori'] = $this->HomeModel->tampil_kategori()->result();
        
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }



   
}