<?php
class Edit_Member extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Member_model');
        
    }
    public function index(){
        
    }
    public function edit($id = null){
        if(!isset($id)) redirect('auth/users');

        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rule($member->rules());

        if($validation->run()){
            $member->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["member"] = $member->getById($id);
        if(!$data["member"]) show_404();

        $this->load->view("auth/member", $data);
    }
}