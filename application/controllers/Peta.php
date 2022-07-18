<?php
ob_start();

class Peta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
    }

    public function index()
    {
        $data['kategori'] = $this->Model_data->Tampil_kategori()->result();
        $data['data_lokasi'] = $this->Model_peta->tampil_peta()->result_array();

        $this->load->view('template_map/header');
        $this->load->view('template_map/navbar');
        $this->load->view('peta', $data);
        $this->load->view('template_map/footer');
    }

    public function get_kategori($id_kategori)
    {
        if($id_kategori == '0'){
            $data['data_lokasi'] = $this->Model_peta->tampil_peta()->result_array();
            // echo json_encode($data['data_lokasi']);
            $this->load->view('peta2', $data);
        }else{
            $data['data_lokasi'] = $this->db->get_where('data_llaj', ['id_kategori' => $id_kategori])->result_array();
            // echo json_encode($data['data_lokasi']); 
            $this->load->view('peta2', $data);
        }
    }
}
