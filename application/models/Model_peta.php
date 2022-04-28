<?php


class Model_peta extends CI_Model
{

    public function tampil_cctv()
    {
        return $this->db->get('data_cctv');
    }
}
