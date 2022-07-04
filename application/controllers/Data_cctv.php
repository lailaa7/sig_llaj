<?php

class Data_cctv extends CI_Controller
{

    public function index()
    {
        $data['data_cctv'] = $this->model_cctv->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_cctv', $data);
        $this->load->view('template/footer');
    }

    
}
