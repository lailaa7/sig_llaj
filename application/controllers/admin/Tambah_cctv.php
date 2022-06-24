<?php

class Tambah_cctv extends CI_Controller
{

    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_cctv');
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
            'lokasi',
            '',
            'required',
            array('required' => 'Tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'jumlah',
            'Jumlah',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'kondisi',
            'Kondisi',
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
            $this->load->view('admin/tambah_cctv');
            $this->load->view('template_admin/footer');
        } else {
            //membuat cek ke database
            $cek = $this->db->query("SELECT id_cctv FROM data_cctv ORDER BY id_cctv 
            DESC limit 1");
            $jumlah = $cek->num_rows();
            foreach ($cek->result() as $ck) {
                $id = $ck->id_cctv;
            }

            //kondisi jika kode lebih dari 0 dan kurang dari 1
            if ($jumlah <> 0) {
                $kode = intval($id) + 1;
            } else {
                $kode = 1;
            }

            //hasil kode
            $kodemax = 'CCTV' . str_pad($kode, 3, "0", STR_PAD_LEFT);

            $data = array(
                'id_cctv'           => $kodemax,
                'nama_jalan'        =>  $this->input->post('nama_jalan'),
                'lokasi'           =>  $this->input->post('lokasi'),
                'jumlah'           =>  $this->input->post('jumlah'),
                'kondisi'           =>  $this->input->post('kondisi'),
                'latitude'           =>  $this->input->post('latitude'),
                'longitude'           =>  $this->input->post('longitude')
            );

            $this->model_cctv->tambah_data($data, 'data_cctv');
            redirect('admin/cctv_admin');
        }
    }
}
