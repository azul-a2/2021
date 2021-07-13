<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class LoginController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'Daftar',
            'date' => date('Y')
        );

        $this->load->view('contents/login'); 
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}


