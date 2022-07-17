<?php

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $cekuser   = $this->Model_auth->cek_user($username);

        if ($cekuser) {
            $ceklogin = $this->Model_auth->cek_login($username, $password);

            if ($ceklogin) {
                foreach ($ceklogin as $cek)
                    if ($cek->status == 1) {
                        $this->session->set_userdata('id_user', $cek->id_user);
                        $this->session->set_userdata('username', $cek->username);
                        $this->session->set_userdata('password', $cek->password);
                        $this->session->set_userdata('level', $cek->level);
                        $this->session->set_userdata('status', $cek->status);

                        if ($this->session->userdata('level') == 'admin') {
                            redirect('admin/dashboard', 'refresh');
                        } else {
                            redirect('superadmin/dashboard', 'refresh');
                        }
                    } else {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Maaf Akun Anda Belum Aktif !</strong><br> 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                          </div>');
                        redirect('Auth/login');
                    }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Maaf!</strong><br>Username atau Password anda Salah.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('Auth/login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Maaf!</strong><br> Username Belum Terdaftar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('Auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
}
