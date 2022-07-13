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

    public function Edit($id)
    {
        $where = array('id_halte' => $id);
        $data['halte']  = $this->model_cctv->edit_data($where, 'data_halte')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_halte', $data);
        $this->load->view('template_admin/footer');
    }

    public function Update($id)
    {
        $data = array(
            'id_halte'          => $this->input->post('id_halte'),
            'nama_halte'        =>  $this->input->post('nama_jalan'),
            'lokasi'        =>  $this->input->post('lokasi'),
            'latitude'           => $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );


        $where = array(
            'id_halte' => $id
        );

        $this->model_parkir->update_data($data, 'data_halte');
        $this->session->set_flashdata('flashdata', 'Menambah');
        redirect('admin/Halte_admin');
    }

    public function Hapus($id)
    {
        $where = array('id_halte' => $id);
        $this->model_parkir->Hapus_data($where, 'data_halte');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Halte_admin');
    }
}
