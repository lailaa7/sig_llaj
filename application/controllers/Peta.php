<?php

class Peta extends CI_Controller
{

    public function index()
    {
        $data['data_lokasi']         = $this->Model_peta->tampil_peta()->result_array();
        $data['kategori'] = $this->Model_data->Tampil_kategori()->result();
        $this->load->view('template_map/header');
        $this->load->view('template_map/navbar');
        $this->load->view('peta2', $data);
        $this->load->view('template_map/footer');
    }

    public function get_kategori($id_kategori)
    {
        if ($id_kategori == '0') {
            $data['data_lokasi'] = $this->Model_peta->tampil_peta()->result_array();

            $this->load->view('peta', $data);
        } else {
            $data['data_lokasi'] = $this->db->get_where('data_llaj', ['id_kategori' => $id_kategori])->result_array();

            $this->load->view('peta', $data);
        }
    }
    
    public function Detail($id)
    {
        $this->load->model('Model_peta');
        $data['detail'] = $this->Model_peta->detail_data($id);
        $this->load->view('template_map/header');
        $this->load->view('template_map/navbar');
        $this->load->view('detail_peta', $data);
        $this->load->view('template_map/footer');
    }
}
