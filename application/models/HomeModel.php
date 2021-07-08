<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{ 

    public function tampil_kategori(){
        $query = $this->db->query("SELECT title FROM `category` ORDER BY title ASC");
        return $query;
    }

    public function tampil_region(){
        $query = $this->db->query("SELECT title FROM `region` ORDER BY title ASC");
        return $query;
    }
}