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
        $data = array(
            'title' => "Jual Beli Laku",
            'date' => date('Y'),
            'rekomendasi_produk' => $this->HomeModel->rekomendasi_produk()->result(),
            'baru_produk' => $this->HomeModel->news_produck()->result(),
            'region' => $this->HomeModel->tampil_region()->result(),
            'kategori' => $this->HomeModel->tampil_kategori()->result()
        );
        
        $this->load->view('templates/header', $data);
        $this->load->view('contents/home');
        $this->load->view('templates/footer', $data);
    }
}