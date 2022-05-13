<?php

class Terminal_admin extends CI_Controller
{

    public function index()
    {
        $data['data_terminal'] = $this->model_terminal->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/terminal_admin', $data);
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

    public function detail_cctv($id)
    {
        $this->load->model('model_cctv');
        $data['detail'] = $this->model_cctv->detail_data($id);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/detail_cctv', $data);
        $this->load->view('template_admin/footer');
    }
}
