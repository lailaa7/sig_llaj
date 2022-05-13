<?php

class Data_parkir extends CI_Controller
{

    public function index()
    {
        $data['data_parkir'] = $this->model_parkir->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_parkir', $data);
        $this->load->view('template/footer');
    }
}
