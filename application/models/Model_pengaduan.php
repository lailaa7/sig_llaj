<?php


class Model_pengaduan extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('pengaduan');
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('pengaduan', array('no_tiket' => $id))->row();
        return $query;
    }
}
