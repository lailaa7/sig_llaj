<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

    public function forget()
    {
        // $this->load->view('template/header');
        // $this->load->view('template/navbar');
        $this->load->view('lupa_password');
        // $this->load->view('template/footer');
    }
    public function kirim_email()
    {
        $email = $this->input->post('email');
        $where = array(
            'email' => $email
        );
        $cek = $this->Model_auth->cek($where, 'users');
        if ($cek->num_rows() > 0) {
            $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
            $token  = substr(str_shuffle($karakter), 0, 20);
            $data = array(
                'token'     => $token
            );
            $this->Model_auth->Update_data($where, $data, 'users');
            $pesan = 'Berikut link reset password anda ' . base_url('Auth/ganti_password/' . $token);

            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host       = 'mail.rocky-techno.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'llaj.madiun@rocky-techno.com'; // ubah dengan alamat email Anda
                $mail->Password   = 'sandisaya'; // ubah dengan password email Anda
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;

                $mail->setFrom('llaj.madiun@rocky-techno.com', 'No reply'); // ubah dengan alamat email Anda
                $mail->addAddress($email); // ubah dengan alamat email Anda

                // Isi Email
                $mail->isHTML(true);
                $mail->Subject = 'Reset Password';
                $mail->Body    = $pesan;

                $mail->send();
            } catch (Exception $e) {
                echo "gagal";
            }

            // Pesan Berhasil Kirim Email/Pesan Error
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong><br> Pesan Berhasil Dikirim.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('Auth/forget'));


            // echo $token;
            // $jumlah_karakter = strlen($token);
            // echo '<br>';
            // echo $jumlah_karakter;
            // echo "ada";
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal</strong><br>Email yang anda masukan tidak terdaftar
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect(base_url('Auth/forget'));
        }
    }
    public function ganti_password($token)
    {
        $data['token']  = $token;
        $where = array(
            'token'     => $token
        );
        $cek = $this->Model_auth->cek($where, 'users');
        if ($cek->num_rows() > 0) {
            $this->load->view('ganti_password', $data);
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Maaf!</strong><br>Token Tidak Ada
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('Auth/login');
        }
    }
    public function proses_ganti()
    {
        $password = md5($this->input->post('password'));
        $token = $this->input->post('token');
        $data = array(
            'password'  => $password,
            'token'     => ''
        );
        $where = array(
            'token'     => $token
        );
        $this->Model_auth->Update_data($where, $data, 'users');


        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong><br>Password Telah Diganti
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        redirect('Auth/login');
    }
}
