<?php

class No_tiket extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('no_tiket');
        // $this->load->view('template/footer');
    }

    
}
