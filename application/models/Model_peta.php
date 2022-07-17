<?php


class Model_peta extends CI_Model
{

    public function tampil_cctv()
    {
        return $this->db->get('data_cctv');
    }

    function Tampil_peta()
    {
        $query = $this->db->get('peta');
        return $query;
    }
}
