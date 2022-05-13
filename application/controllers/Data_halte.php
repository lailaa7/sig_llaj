<?php

class Data_halte extends CI_Controller
{

    public function index()
    {
        $data['data_halte'] = $this->model_halte->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_halte', $data);
        $this->load->view('template/footer');
    }
}
