<?php

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != 'admin') {
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
        $data['user'] = $this->model_profil->tampil_profil($this->session->userdata('id_user'))->row();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/profil', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit_profil($id)
    {
        $where = array('id_user' => $id);
        $data['user']  = $this->model_cctv->edit_data($where, 'users')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_profil', $data);
        $this->load->view('template_admin/footer');
    }

    public function Update($id)
    {
        $data = array(
            'nama'        =>  $this->input->post('nama'),
            'username'           =>  $this->input->post('username'),
        );

        $where = array(
            'id_user' => $id
        );

        $this->model_profil->Update_data($where, $data,  'users');
        // $this->session->set_flashdata('flashdata', 'Mengedit');
        redirect('admin/profil');
    }
}
