<?php

class Tambah_halte extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_halte');
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $this->form_validation->set_rules(
            'lokasi',
            'Lokasi',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
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
            'latitude',
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
            $this->load->view('admin/tambah_halte');
            $this->load->view('template_admin/footer');
        } else {

            $ci = get_instance();
            $query = "SELECT max(id_halte) as maxKode FROM data_halte";
            $halte = $ci->db->query($query)->row_array();
            $kode = $halte['maxKode'];
            $noUrut = (int) substr($kode, 6);
            $noUrut++;
            $kodeBaru = "HLT" . " - " . sprintf("%03s", $noUrut);

            $data = array(
                'id_halte'          => $kodeBaru,
                'nama_halte'        =>  $this->input->post('nama_jalan'),
                'lokasi'        =>  $this->input->post('lokasi'),
                'kondisi'           =>  $this->input->post('kondisi'),
                'latitude'           => $this->input->post('latitude'),
                'longitude'           =>  $this->input->post('longitude')
            );
            $this->model_parkir->tambah_data($data, 'data_halte');
            redirect('admin/halte_admin');
        }
    }
}
