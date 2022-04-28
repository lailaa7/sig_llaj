<?php

class Pengaduan extends CI_Controller
{

    public function index()
    {
        $data['pengaduan'] = $this->model_pengaduan->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('template_admin/footer');
    }
}
