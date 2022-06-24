<?php

use Carbon\Carbon;

class Pengaduan extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('lacak');
        $this->load->view('template/footer');
    }

    public function lacak()
    {
        $data = array(
            'no_tiket2'             => $this->input->post('no_tiket'),
        );
        $this->model_pengaduan->lacak($data, 'proses_pengaduan');
        redirect('lacak');
    }
}
