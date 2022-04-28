<?php

class Cctv_admin extends CI_Controller
{

    public function index()
    {
        $data['data_cctv'] = $this->model_cctv->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/cctv_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit_cctv($id)
    {
        $where = array('id_cctv' => $id);
        $data['data_cctv']  = $this->model_cctv->edit_data($where, 'data_cctv')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_cctv', $data);
        $this->load->view('template_admin/footer');
    }
}
