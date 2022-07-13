<?php

class Tambah_akun extends CI_Controller
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
        $kode = $this->db->select('max(id_user) as nomor')->from('users')->get()->result();
        if (!$kode[0]->nomor) {
            $newstring = 0;
        } else {
            $newstring = substr($kode[0]->nomor, -3);
        }
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

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            array('required' => '%s tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s Tidak boleh kosong')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s tidak boleh kosong')
        );

        if ($this->form_validation->run() == false) {

            $kode = $this->db->select('max(id_user) as nomor')->from('users')->get()->result();
            if (!$kode[0]->nomor) {
                $newstring = 0;
            } else {
                $newstring = substr($kode[0]->nomor, -3);
            }
            $baru = $newstring + 1;
            $nourut = $this->formatNbr($baru);
            $data['no_urut'] = 'USR' . $nourut;
            $this->load->view('superadmin/header');
            $this->load->view('superadmin/sidebar');
            $this->load->view('superadmin/tambah_akun', $data);
            $this->load->view('superadmin/footer');
        } else {
            $data = array(
                'id_user'           => $this->input->post('id_user'),
                'nama'        =>  $this->input->post('nama'),
                'username'           =>  $this->input->post('username'),
                'password'           =>  md5($this->input->post('password')),
                'level'           =>  $this->input->post('level'),
                'status'           =>  $this->input->post('status')
            );
            $this->Model_akun->tambah_data($data, 'users');
            $this->session->set_flashdata('flashdata', 'Menambah');
            redirect('superadmin/akun');
        }
    }

    public function edit($id)
    {
        $where = array('id_user' => $id);
        $data['user']  = $this->Model_akun->edit_data($where, 'users')->result();
        $this->load->view('superadmin/header');
        $this->load->view('superadmin/sidebar');
        $this->load->view('superadmin/edit_akun', $data);
        $this->load->view('superadmin/footer');
    }

    public function update($id)
    {
        $data = array(
            'id_user'           => $this->input->post('id_user'),
            'nama'        =>  $this->input->post('nama'),
            'username'           =>  $this->input->post('username'),
            'level'           =>  $this->input->post('level'),
        );

        $where = array(
            'id_user' => $id
        );

        $this->Model_akun->update_data($where, $data,  'users');
        $this->session->set_flashdata('flashdata', 'Mengedit');
        redirect('superadmin/akun');
    }
}
