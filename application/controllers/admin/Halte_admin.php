<?php

class Halte_admin extends CI_Controller
{

    public function index()
    {
        $data['data_halte'] = $this->model_halte->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/halte_admin', $data);
        $this->load->view('template_admin/footer');
    }
}
