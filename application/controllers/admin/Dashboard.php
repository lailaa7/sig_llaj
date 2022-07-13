<?php

class Dashboard extends CI_Controller
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
    }

    public function index()
    {
        $data['data_cctv'] = $this->db->get('data_cctv')->num_rows();
        $data['data_halte'] = $this->db->get('data_halte')->num_rows();
        $data['data_parkir'] = $this->db->get('data_parkir')->num_rows();
        $data['data_stasiun'] = $this->db->get('data_stasiun')->num_rows();
        $data['data_terminal'] = $this->db->get('data_terminal')->num_rows();
        $data['speed_bump'] = $this->db->get('speed_bump')->num_rows();

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer');
    }
}
