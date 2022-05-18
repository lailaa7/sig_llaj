<?php

class No_tiket extends CI_Controller
{

    public function index()
    {
        $last = $this->db->get('pengaduan')->result_array();
        $terakhir = null;
        foreach ($last as $ls) {
            $terakhir = $ls['no_tiket'];
        }
        $data['terakhir'] = $terakhir;
        // var_dump($data);
        // die;
        // $data = $terakhir['no_tiket'];
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('no_tiket', $data);
        // $this->load->view('template/footer');
    }
}
