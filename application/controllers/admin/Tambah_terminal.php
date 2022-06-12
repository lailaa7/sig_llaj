<?php

class Tambah_terminal extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_parkir');
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules(
            'nama_jalan',
            'Nama Jalan',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'kondisi',
            'kondisi',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'latitute',
            'latitude',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'longitude',
            'longitude',
            'required',
            array('required' => '%s tidak boleh kosong')
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/tambah_parkir');
            $this->load->view('template_admin/footer');
        } else {

            $ci = get_instance();
            $query = "SELECT max(id_terminal) as maxKode FROM data_terminal";
            $halte = $ci->db->query($query)->row_array();
            $kode = $halte['maxKode'];
            $noUrut = (int) substr($kode, 6);
            $noUrut++;
            $kodeBaru = "PRK" . " - " . sprintf("%03s", $noUrut);

            $data = array(
                'id_parkir'         => $kodeBaru,
                'nama_jalan'        =>  $this->input->post('nama_jalan'),
                'kondisi'           =>  $this->input->post('kondisi'),
                'latitude'           => $this->input->post('latitude'),
                'longitude'           =>  $this->input->post('longitude')
            );
            $this->model_parkir->tambah_data($data, 'data_parkir');
            redirect('admin/parkir_admin');
        }
    }
}
