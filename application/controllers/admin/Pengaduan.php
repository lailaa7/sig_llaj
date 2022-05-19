<?php

class Pengaduan extends CI_Controller
{

    public function index()
    {
        $data['pengaduan'] = $this->model_pengaduan->tampil_data()->result_array();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('template_admin/footer');
    }

    public function konfirmasi()
    {
        // $no = $this->db->get_where('pengaduan', array('no_tiket' => $this->input->post('no_tiket')))->row();

        // var_dump($no);
        // die;
        // $this->db->order_by('no_tiket', 'DSC');
        // return $this->db->from('pengaduan')
        //     ->join('no_tiket', 'no_tiket.no_tiket=pengaduan.proses_pengaduan');

        $data = array(
            'no_tiket' => $this->input->post('no_tiket'),
            'status' =>  '1',
        );
        $this->model_pengaduan->tambah_data($data, 'proses_pengaduan');
        redirect('admin/pengaduan');
    }
}
