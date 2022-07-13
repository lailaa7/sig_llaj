<?php

class Peta extends CI_Controller
{

    public function index()
    {
        $data['data_cctv'] = $this->db->get('data_cctv')->result_array();
        $data['data_halte'] = $this->db->get('data_halte')->result_array();
        $data['data_parkir'] = $this->db->get('data_parkir')->result_array();
        $data['data_stasiun'] = $this->db->get('data_stasiun')->result_array();
        $data['data_terminal'] = $this->db->get('data_terminal')->result_array();
        $data['speed_bump'] = $this->db->get('speed_bump')->result_array();

        $this->load->view('template_map/header');
        $this->load->view('template_map/navbar');
        $this->load->view('peta', $data);
        $this->load->view('template_map/footer');
    }

    public function map_data()
    {
        $response = [];
        $get_cctv = $this->model_peta->tampil_cctv()->result_array();
        foreach ($get_cctv as $knk) {
            $data = null;
            $data['nama_jalan'] = $knk['nama_jalan'];
            $data['latitude'] = $knk['latitude'];
            $data['longitude'] = $knk['longitude'];
            $response[] = $data;
        }
        echo "var data_cctv=" . json_encode($response, JSON_PRETTY_PRINT);
    }
}