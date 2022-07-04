<?php

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != 'admin') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong><br> Anda Harus Login Dulu
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('Auth/login');
        }
    }

    public function index()
    {

        $data['pengaduan'] = $this->model_pengaduan->tampil_data()->result_array();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('template_admin/footer');
    }

    public function detail_pengaduan($id)
    {
        $kode = $this->db->select('max(id_proses) as nomor')->from('proses_pengaduan')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $data['id'] = 'Pr' . $nourut;

        $this->load->model('model_pengaduan');
        $data['detail'] = $this->model_pengaduan->detail_data($id);
        $data['detail']->status_proses = $this->model_pengaduan->get_status($data['detail']->no_tiket);
        // echo json_encode($data['detail']);
        // exit;
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/detail_pengaduan', $data);
        $this->load->view('template_admin/footer');
    }

    public function konfirmasi()
    {
        $type = (int) $this->input->post('type_proses');


        if ($type == 1) {
            $data = array(
                'id_proses' => $this->input->post('id_proses'),
                'id_user' => $this->session->userdata('id_user'),
                'no_tiket' => $this->input->post('no_tiket'),
                'status_proses' =>  '2',
            );
            $status = array(
                'status' => '2'
            );
            $this->db->where('no_tiket', $this->input->post('no_tiket'));
            $this->db->update('pengaduan', $status);
            $this->model_pengaduan->tambah_data($data, 'proses_pengaduan');
        } elseif ($type == 2) {
            $data = array(
                'id_proses' => $this->input->post('id_proses'),
                'id_user' => $this->session->userdata('id_user'),
                'no_tiket' => $this->input->post('no_tiket'),
                'status_proses' =>  '3',
            );
            $status = array(
                'status' => '3'
            );
            $this->db->where('no_tiket', $this->input->post('no_tiket'));
            $this->db->update('pengaduan', $status);
            $this->model_pengaduan->tambah_data($data, 'proses_pengaduan');
        }
        redirect('admin/pengaduan');
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
}
