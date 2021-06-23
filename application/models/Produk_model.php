<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model{ 
    public function tampil_data(){
        $query = $this->db->query("SELECT title, photo1, price FROM `product` ORDER BY hit DESC LIMIT 5");
        return $query;
    }
}