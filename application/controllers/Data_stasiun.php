<?php

class Data_stasiun extends CI_Controller
{

    public function index()
    {
        $data['data_stasiun'] = $this->model_stasiun->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('data_stasiun', $data);
        $this->load->view('template/footer');
    }
}
