<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Daftar extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = "Daftar";
        $data['date'] = date('Y');

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[5]|is_unique[member.nama]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[member.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Passconf', 'trim|required|matches[password]');
        $this->form_validation->set_rules('almt', 'Almt', 'trim|required');
        $this->form_validation->set_rules('jkel', 'Jkel', 'trim|required',
        array(
            'required' => 'Gender harus di isi %s')
        );
        $this->form_validation->set_message('required', '%s Field masih kosong silakan isi');
        $this->form_validation->set_message('min_length', '{field} minimum 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} terlah terdaftar silahkan menggunakan {filed} lain');
        if($this->form_validation->run() == false){
            $this->load->view('auth/auth_templates/header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('auth/auth_templates/footer', $data);
        }else{
            echo "data berhasil disimpan";
        }
    }
}