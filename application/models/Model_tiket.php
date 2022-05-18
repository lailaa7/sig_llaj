<?php


class Model_tiket extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('pengaduan');
    }

    function terakhir()
    {
        $query = $this->db->get('pengaduan', 1);
        return $this->db->last_query(); // Return Last Query
    }
}
