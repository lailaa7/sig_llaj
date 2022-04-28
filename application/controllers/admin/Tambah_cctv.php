<?php

class Tambah_cctv extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_cctv');
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_jalan     = $this->input->post('nama_jalan');
        $lokasi        = $this->input->post('lokasi');
        $jumlah        = $this->input->post('jumlah');
        $kondisi        = $this->input->post('kondisi');
        $latitude        = $this->input->post('latitude');
        $longitude        = $this->input->post('longitude');

        $data = array(
            'nama_jalan'        =>  $nama_jalan,
            'lokasi'           =>  $lokasi,
            'jumlah'           =>  $jumlah,
            'kondisi'           =>  $kondisi,
            'latitude'           =>  $latitude,
            'longitude'           =>  $longitude
        );

        $this->model_cctv->tambah_data($data, 'data_cctv');
        redirect('admin/cctv_admin');
    }
}
