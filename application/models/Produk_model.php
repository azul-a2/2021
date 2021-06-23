<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model{
    private $_table = "product"; 

    public function get_all_data(){
        return $this->db->get($this->_table);
    }

    

}