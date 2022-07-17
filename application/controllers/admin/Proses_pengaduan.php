<?php

class Proses_pengaduan extends CI_Controller
{

    public function index()
    {
        $data['proses'] = $this->Model_proses->join_tabel()->result_array();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/proses_pengaduan', $data);
        $this->load->view('template_admin/footer');
    }

    public function proses($id)
    {
        $this->load->Model('Model_pengaduan');
        $data['tambah'] = $this->Model_proses->detail_data($id);

        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_proses', $data);
        $this->load->view('template_admin/footer');
    }

    public function proses1()
    {
        $gambar         = $_FILES['proses1']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './lampiran';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'P' . date('dmh');

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('proses1')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }

            $data = array(
                'ket1'        =>  $this->input->post('ket1'),
                'proses1'           =>  $gambar,

            );
            $where = array(
                'no_tiket' => $this->input->post('no_tiket')
            );

            $this->Model_proses->update_data($where, $data, 'proses_pengaduan');
            redirect('admin/proses_pengaduan/index/' . $this->input->post('no_tiket'));
        }
    }

    public function proses2()
    {
        $gambar         = $_FILES['proses2']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './lampiran';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'P' . date('dmh');

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('proses2')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }

            $data = array(
                'ket2'        =>  $this->input->post('ket2'),
                'proses2'           =>  $gambar,

            );
            $where = array(
                'no_tiket' => $this->input->post('no_tiket')
            );

            $this->Model_proses->update_data($where, $data, 'proses_pengaduan');
            redirect('admin/proses_pengaduan/index/' . $this->input->post('no_tiket'));
        }
    }

    public function proses3()
    {
        $gambar         = $_FILES['proses3']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './lampiran';
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = 'P' . date('dmh');

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('proses3')) {
                echo "Gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }

            $data = array(
                'ket3'        =>  $this->input->post('ket3'),
                'proses3'           =>  $gambar,
                'status'        => '4'

            );
            $where = array(
                'no_tiket' => $this->input->post('no_tiket')
            );

            $this->Model_proses->update_data($where, $data, 'proses_pengaduan');
            redirect('admin/proses_pengaduan/index/' . $this->input->post('no_tiket'));
        }
    }
}
