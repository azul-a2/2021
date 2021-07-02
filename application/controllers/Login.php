<?php

class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function index(){
       $this->load->view('login'); 
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}