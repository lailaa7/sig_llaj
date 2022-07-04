<?php

class Tambah_parkir extends CI_Controller
{

    public function Index()
    {
        $kode = $this->db->select('max(id_parkir) as nomor')->from('data_parkir')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->FormatNbr($baru);
        $data['no_urut'] = 'PRK' . $nourut;
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_parkir', $data);
        $this->load->view('template_admin/footer');
    }

    public function FormatNbr($nbr)
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

    public function Tambah_aksi()
    {
        $this->form_validation->set_rules(
            'nama_jalan',
            'Nama Jalan',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'lokasi',
            'lokasi',
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
            $kode = $this->db->select('max(id_parkir) as nomor')->from('data_parkir')->get()->result();
            if (!$kode[0]->nomor) {
                $newstring = 0;
            } else {
                $newstring = substr($kode[0]->nomor, -3);
            }
            $baru = $newstring + 1;
            $nourut = $this->FormatNbr($baru);
            $data['no_urut'] = 'PRK' . $nourut;
            $this->load->view('template_admin/header');
            $this->load->view('template_admin/sidebar');
            $this->load->view('admin/tambah_parkir', $data);
            $this->load->view('template_admin/footer');
        } else {
            $data = array(
                'id_parkir'         => $this->input->post('id_parkir'),
                'nama_jalan'        =>  $this->input->post('nama_jalan'),
                'lokasi'           =>  $this->input->post('lokasi'),
                'latitude'           => $this->input->post('latitude'),
                'longitude'           =>  $this->input->post('longitude')
            );
            $this->model_parkir->Tambah_data($data, 'data_parkir');
            $this->session->set_flashdata('flashdata', 'Menambah');
            redirect('admin/Parkir_admin');
        }
    }
}
