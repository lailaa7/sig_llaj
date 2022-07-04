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

    public function update($id)
    {
        $data = array(
            'id_cctv'           =>  $this->input->post('id_cctv'),
            'nama_jalan'        =>  $this->input->post('nama_jalan'),
            'lokasi'           =>  $this->input->post('lokasi'),
            'jumlah'           =>  $this->input->post('jumlah'),
            'latitude'           =>  $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );

        $where = array(
            'id_cctv' => $id
        );

        $this->model_cctv->update_data($where, $data,  'data_cctv');
        $this->session->set_flashdata('flashdata', 'mengedit');
        redirect('admin/cctv_admin');
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

    public function hapus($id)
    {
        $where = array('id_cctv' => $id);
        $this->model_cctv->hapus_data($where, 'data_cctv');
        $this->session->set_flashdata('flashdata', 'menghapus');
        redirect('admin/Cctv_admin');
    }
}
