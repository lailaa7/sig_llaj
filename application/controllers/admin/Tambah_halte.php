<?php

class Tambah_halte extends CI_Controller
{

    public function index()
    {
        $kode = $this->db->select('max(id_halte) as nomor')->from('data_halte')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $data['no_urut'] = 'HLT' . $nourut;
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_halte', $data);
        $this->load->view('template_admin/footer');
    }

    public function formatNbr($nbr)
    {
        if ($nbr == 0 || $nbr == NULL)
            return "001";
        else if ($nbr < 10)
            return "00" . $nbr;
        elseif ($nbr >= 10 && $nbr < 100)
            return "0" . $nbr;
        else
            return strval($nbr);
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
            $kode = $this->db->select('max(id_halte) as nomor')->from('data_halte')->get()->result();
            if (!$kode[0]->nomor) {
                $newstring = 0;
            } else {
                $newstring = substr($kode[0]->nomor, -3);
            }
            $baru = $newstring + 1;
            $nourut = $this->formatNbr($baru);
            $data['no_urut'] = 'HLT' . $nourut;
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/tambah_halte', $data);
            $this->load->view('template_admin/footer');
        } else {

            $data = array(
                'id_halte'          => $this->input->post('id_halte'),
                'nama_halte'        =>  $this->input->post('nama_jalan'),
                'lokasi'        =>  $this->input->post('lokasi'),
                'latitude'           => $this->input->post('latitude'),
                'longitude'           =>  $this->input->post('longitude')
            );
            $this->model_parkir->tambah_data($data, 'data_halte');
            $this->session->set_flashdata('flashdata', 'Menambah');
            redirect('admin/halte_admin');
        }
    }
}
