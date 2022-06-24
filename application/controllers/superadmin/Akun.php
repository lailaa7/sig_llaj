<?php

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
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
        $data['user'] = $this->model_akun->tampil_data()->result();
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/akun', $data);
        $this->load->view('superadmin/footer');
    }

    public function tambah_akun()
    {
        $kode = $this->db->select('max(id_user) as nomor')->from('users')->get()->result();
        $newstring = substr($kode[0]->nomor, -3);
        $baru = $newstring + 1;
        $nourut = $this->formatNbr($baru);
        $data['no_urut'] = 'USR' . $nourut;
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/tambah_akun', $data);
        $this->load->view('superadmin/footer');
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

        $data = array(
            'id_user'           => $this->input->post('id_user'),
            'nama'        =>  $this->input->post('nama'),
            'username'           =>  $this->input->post('username'),
            'password'           =>  md5($this->input->post('password')),
            'level'           =>  $this->input->post('level'),
            'status'           =>  $this->input->post('status')
        );

        $this->model_akun->tambah_data($data, 'users');
        redirect('superadmin/akun');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);
        $this->model_akun->hapus_data($where, 'users');
        redirect('superadmin/akun');
    }
}
