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

    public function Hapus($id)
    {
        $where = array('id_terminal' => $id);
        $this->model_parkir->Hapus_data($where, 'data_terminal');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Terminal_admin');
    }
}
