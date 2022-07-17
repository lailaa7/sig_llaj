<?php

class Peta_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong><br> Anda Harus Login Dulu
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('Auth/login');
        }
        error_reporting(0);
    }

    public function index()
    {
        $data['data_lokasi'] 		= $this->Model_peta->tampil_peta()->result_array();
        $data['kategori'] = $this->Model_data->Tampil_kategori()->result();
        
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/peta_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function get_kategori($id_kategori)
    {
        if($id_kategori == '0'){
            $data['data_lokasi'] = $this->Model_peta->tampil_peta()->result_array();
            
            $this->load->view('admin/peta_admin_2', $data);
        }else{
            $data['data_lokasi'] = $this->db->get_where('data_llaj', ['id_kategori' => $id_kategori])->result_array();
             
            $this->load->view('admin/peta_admin_2', $data);
        }
    }
    
    
}
