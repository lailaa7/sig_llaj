<?php

class Tambah_halte extends CI_Controller
{

    public function index()
    {
        $kode = $this->db->select('max(id_halte) as nomor')->from('data_halte')->get()->result();
        $newstring = substr($kode[0]->nomor, -3);
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

            // $ci = get_instance();
            // $query = "SELECT max(id_halte) as maxKode FROM data_halte";
            // $halte = $ci->db->query($query)->row_array();
            // $kode = $halte['maxKode'];
            // $noUrut = (int) substr($kode, 6);
            // $noUrut++;
            // $kodeBaru = "HLT" . " - " . sprintf("%03s", $noUrut);

            $data = array(
                'id_halte'          => $this->input->post('id_halte'),
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
