<?php

class Kategori extends CI_Controller
{

    public function index()
    {
        $data['kategori'] = $this->Model_data->Tampil_kategori()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/kategori', $data);
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

    public function Tambah_kategori()
    {
        $kode = $this->db->select('max(id_kategori) as nomor')->from('kategori')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $id = 'KTG' . $nourut;

        $data = array(
            'id_kategori'           =>  $id,
            'nama_kategori'           =>  $this->input->post('kategori'),
        );
        $this->Model_data->Tambah_data($data, 'kategori');
        $this->session->set_flashdata('flashdata', 'Menambah');
        redirect('admin/kategori');
    }

    public function Hapus_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $this->Model_data->Hapus_data($where, 'data_kategori');
        $this->session->set_flashdata('flashdata', 'Menghapus');
        redirect('admin/kategori');
    }
}
