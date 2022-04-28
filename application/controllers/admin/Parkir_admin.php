<?php

class Parkir_admin extends CI_Controller
{

    public function index()
    {
        $data['data_cctv'] = $this->model_cctv->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/parkir_admin', $data);
        $this->load->view('template_admin/footer');
    }

}
