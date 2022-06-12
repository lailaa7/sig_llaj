<?php

class Proses_pengaduan extends CI_Controller
{

    public function index()
    {
        $data['proses'] = $this->model_proses->tampil_data()->result_array();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/proses_pengaduan', $data);
        $this->load->view('template_admin/footer');
    }

    public function konfirmasi()
    {
        

        $data = array(
            'no_tiket' => $this->input->post('no_tiket'),
            'status' =>  '1',
        );
        $this->model_pengaduan->tambah_data($data, 'proses_pengaduan');
        redirect('admin/pengaduan');
    }

    public function proses()
    {
         
    }
}
