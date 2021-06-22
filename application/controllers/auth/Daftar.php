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

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[5]|is_unique[member.nama]', 
        array(
            'required' => 'Nama harus di isi %s',
            'is_unique' => 'Nama %s sudah terdaftar silahkan menggunakan nama lain' )
        );
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]', 
            array(
                'matches' => '%s Konfirmasi password tidak sesuai dengan password'
            )
        );
        $this->form_validation->set_rules('almt', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('auth/auth_templates/header', $data);
            $this->load->view('auth/daftar');
            $this->load->view('auth/auth_templates/footer', $data);
        }else{
            echo "data berhasil disimpan";
        }
    }
}