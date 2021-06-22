<?php

class Testing extends CI_Controller{
    public function index()
    {
        $data['title'] = "Testing";
        $data['date'] = date('Y');

        $this->load->view('templates/testing_header', $data);
        $this->load->view('testing');
        $this->load->view('templates/testing_footer', $data);
    }
}