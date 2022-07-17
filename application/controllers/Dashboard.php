<?php

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['pengaduan'] = $this->Model_pengaduan->tampil_data()->result();
        $this->load->view('template/header');
        // $this->load->view('template/navbar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}
 
?>