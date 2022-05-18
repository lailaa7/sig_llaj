<?php


class Model_tiket extends CI_Model{

    public function tampil_data()
    {
        return $this->db->get('pengaduan');
    }
}
