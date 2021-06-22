<?php

class MemberModel extends CI_Model{
    //up berarti input data
    public function insert_data($table, $data){
        return $this->db->insert($table, $data);
    }

    public function get_data($table, $data){
        return $this->db->get_where($table, $data);
    }
}