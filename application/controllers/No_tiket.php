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

    public function pdf($id)
    {
        $id =  $id;
        $this->data['pengajuan'] = $this->model_tiket->print($id)->row();
        // var_dump($data); die;
        $this->load->library('pdfgenerator');

        // title dari pdf
        $this->data['title_pdf'] = 'Detail Pengajuan';

        // filename dari pdf ketika didownload
        $file_pdf = 'Pengaduan LLAJ';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $html = $this->load->view('print_pengaduan', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
