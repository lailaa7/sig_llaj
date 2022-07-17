<?php

class Kelurahan extends CI_Controller
{

    public function index()
    {
        $data['kelurahan'] = $this->Model_data->Tampil_kelurahan()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/kelurahan', $data);
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

    public function Tambah_kelurahan()
    {
        $kode = $this->db->select('max(id_kelurahan) as nomor')->from('kelurahan')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $id = 'KLR' . $nourut;

        $data = array(
            'id_kelurahan'           =>  $id,
            'nama_kelurahan'           =>  $this->input->post('kelurahan'),
        );
        $this->Model_data->Tambah_data($data, 'kelurahan');
        $this->session->set_flashdata('flashdata', 'Menambah');
        redirect('admin/kelurahan');
    }
}
