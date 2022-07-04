<?php

class Parkir_admin extends CI_Controller
{

    public function Index()
    {
        $data['data_parkir'] = $this->model_parkir->Tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/parkir_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function Hapus($id)
    {
        $where = array('id_parkir' => $id);
        $this->model_parkir->Hapus_data($where, 'data_parkir');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Parkir_admin');
    }
}
