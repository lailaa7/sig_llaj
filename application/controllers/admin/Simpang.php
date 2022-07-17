<?php

class Simpang extends CI_Controller
{

    public function index()
    {
        $data['simpang'] = $this->Model_data->Tampil_simpang()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/simpang', $data);
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

    public function Tambah_simpang()
    {
        $kode = $this->db->select('max(id_simpang) as nomor')->from('simpang')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $id = 'SMPG' . $nourut;

        $data = array(
            'id_simpang'           =>  $id,
            'nama_simpang'           =>  $this->input->post('simpang'),
        );
        $this->Model_data->Tambah_data($data, 'simpang');
        $this->session->set_flashdata('flashdata', 'Menambah');
        redirect('admin/simpang');
    }
}
