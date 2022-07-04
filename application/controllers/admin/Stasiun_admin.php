<?php

class Stasiun_admin extends CI_Controller
{

    public function index()
    {
        $data['data_stasiun'] = $this->model_stasiun->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/stasiun_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function Hapus($id)
    {
        $where = array('id_stasiun' => $id);
        $this->model_parkir->Hapus_data($where, 'data_stasiun');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Stasiun_admin');
    }
}
