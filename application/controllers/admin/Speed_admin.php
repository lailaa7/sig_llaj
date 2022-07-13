<?php

class Speed_admin extends CI_Controller
{

    public function index()
    {
        $data['speed_bump'] = $this->model_speed->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/speed_admin', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit($id)
    {
        $where = array('id_speed' => $id);
        $data['speed_bump']  = $this->model_speed->edit_data($where, 'speed_bump')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_speed', $data);
        $this->load->view('template_admin/footer');
    }

    public function update($id)
    {
        $data = array(
            'id_speed'           =>  $this->input->post('id_speed'),
            'nama_jalan'        =>  $this->input->post('nama_jalan'),
            'titik_pasang'           =>  $this->input->post('titik'),
            'volume'           =>  $this->input->post('volume'),
            'kelurahan'           =>  $this->input->post('kelurahan'),
            'latitude'           =>  $this->input->post('latitude'),
            'longitude'           =>  $this->input->post('longitude')
        );

        $where = array(
            'id_speed' => $id
        );

        $this->model_speed->update_data($where, $data,  'speed_bump');
        $this->session->set_flashdata('flashdata', 'mengedit');
        redirect('admin/Speed_admin');
    }

    public function detail($id)
    {
        $this->load->model('model_speed');
        $data['detail'] = $this->model_speed->detail_data($id);
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/detail_speed', $data);
        $this->load->view('template_admin/footer');
    }

    public function hapus($id)
    {
        $where = array('id_speed' => $id);
        $this->model_speed->hapus_data($where, 'speed_bump');
        $this->session->set_flashdata('flashdata', 'menghapus');
        redirect('admin/Speed_admin');
    }
}
