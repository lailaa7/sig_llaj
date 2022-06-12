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

            $ci = get_instance();
            $query = "SELECT max(id_cctv) as maxKode FROM data_cctv";
            $halte = $ci->db->query($query)->row_array();
            $kode = $halte['maxKode'];
            $noUrut = (int) substr($kode, 6);
            $noUrut++;
            $kodeBaru = "CCTV" . " - " . sprintf("%02s", $noUrut);


            $data = array(
                'id_cctv'           => $kodeBaru,
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
