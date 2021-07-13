<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{ 
    //tampil produk
    public function rekomendasi_produk(){
        $query = $this->db->query("SELECT title, photo1, price FROM `product` ORDER BY hit DESC LIMIT 5");
        return $query;
    }
    //tampil produk baru
    public function news_produck(){
        $query = $this->db->query("SELECT title, photo1, price FROM `product` LIMIT 5");
        return $query;
    }
    //tampil kategori
    public function tampil_kategori(){
        $query = $this->db->query("SELECT title, img FROM `category` ORDER BY title ASC");
        return $query;
    }
    //tampil kabupaten bali
    public function tampil_region(){
        $query = $this->db->query("SELECT title FROM `region` ORDER BY title ASC");
        return $query;
    }

    
}