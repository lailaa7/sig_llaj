<?php

class Terminal_admin extends CI_Controller
{

    public function index()
    {
        $data['data_terminal'] = $this->model_terminal->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/terminal_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function Edit($id)
    {
        $where = array('id_terminal' => $id);
        $data['terminal']  = $this->model_cctv->edit_data($where, 'data_terminal')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_terminal', $data);
        $this->load->view('template_admin/footer');
    }

    public function update($id)
    {
        $data = array(
            'id_terminal'         => $this->input->post('id_terminal'),
            'nama_terminal'        =>  $this->input->post('nama_terminal'),
            'lokasi'        =>  $this->input->post('lokasi'),
            'latitude'           => $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );

        $where = array(
            'id_terminal' => $id
        );

        $this->model_termial->update_data($where, $data,  'data_terminal');
        $this->session->set_flashdata('flashdata', 'mengedit');
        redirect('admin/Terminal_admin');
    }
    public function Hapus($id)
    {
        $where = array('id_terminal' => $id);
        $this->model_parkir->Hapus_data($where, 'data_terminal');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/Terminal_admin');
    }
}
