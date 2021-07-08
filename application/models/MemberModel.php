<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model{
    private $_table = "member"; 

    public $id;
    public $login;
    public $password;
    public $nama;
    public $email;
    public $jkel;
    public $almt;
    public $almt_kota;
    public $almt_telp;

    public function save(){
        $post = $this->input->post();
        $this->id = uniqid();
        $this->login = $post['login'];
        $this->password = $post['password'];
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->jkel = $post['jkel'];
        $this->almt = $post['almt'];
        $this->almt_kota = $post['almt_kota'];
        $this->almt_telp = $post['almt_telp'];
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->login = $post['login'];
        $this->password = $post['password'];
        $this->nama = $post['nama'];
        $this->email = $post['email'];
        $this->jkel = $post['jkel'];
        $this->almt = $post['almt'];
        $this->almt_kota = $post['almt_kota'];
        $this->almt_telp = $post['almt_telp'];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function login(){
        $post = $this->input->post();
        $this->db->where('nama', $post["nama"])->or_where('email', $post["email"]);
        $member = $this->db->get($this->_table)->row();
        if($member){
            $isPasswordTrue = password_verify($post["password"], $member->password);
        }
        return false;
    }
}