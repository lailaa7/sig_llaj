<?php

class Parkir_admin extends CI_Controller
{

    public function index()
    {
        $data['data_parkir'] = $this->model_parkir->Tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/parkir_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function Edit_parkir($id)
    {
        $where = array('id_parkir' => $id);
        $data['parkir']  = $this->model_cctv->edit_data($where, 'data_parkir')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_parkir', $data);
        $this->load->view('template_admin/footer');
    }

    public function Update($id)
    {
        $data = array(
            'id_parkir'         => $this->input->post('id_parkir'),
            'nama_jalan'        =>  $this->input->post('nama_jalan'),
            'lokasi'           =>  $this->input->post('lokasi'),
            'latitude'           => $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );

        $where = array(
            'id_parkir' => $id
        );

        $this->model_cctv->Update_data($where, $data,  'data_parkir');
        $this->session->set_flashdata('flashdata', 'mengedit');
        redirect('admin/parkir_admin');
    }

    public function Hapus($id)
    {
        $where = array('id_parkir' => $id);
        $this->model_parkir->hapus_data($where, 'data_parkir');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Parkir_admin');
    }
}
