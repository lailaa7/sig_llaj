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
    public function Edit($id)
    {
        $where = array('id_stasiun' => $id);
        $data['stasiun']  = $this->model_cctv->edit_data($where, 'data_stasiun')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_stasiun', $data);
        $this->load->view('template_admin/footer');
    }
    public function Update($id)
    {
        $data = array(
            'id_stasiun'         => $this->input->post('id_stasiun'),
            'nama_stasiun'         => $this->input->post('nama_stasiun'),
            'lokasi'        =>  $this->input->post('lokasi'),
            'latitude'           => $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );


        $where = array(
            'id_halte' => $id
        );

        $this->model_stasiun->update_data($data, 'data_stasiun');
        $this->session->set_flashdata('flashdata', 'Menambah');
        redirect('admin/stasiun_admin');
    }

    public function Hapus($id)
    {
        $where = array('id_stasiun' => $id);
        $this->model_parkir->Hapus_data($where, 'data_stasiun');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Stasiun_admin');
    }
}
