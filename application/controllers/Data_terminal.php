<?php

class Data_terminal extends CI_Controller
{

    public function index()
    {
        $data['data_terminal'] = $this->model_terminal->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_terminal', $data);
        $this->load->view('template/footer');
    }
}
