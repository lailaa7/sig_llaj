<?php

class Auth extends CI_Controller
{

    public function login()
    {

        $this->load->view('template_admin/header');
        // $this->load->view('template/navbar');
        $this->load->view('admin/login');
        // $this->load->view('template/footer');
    }
}
