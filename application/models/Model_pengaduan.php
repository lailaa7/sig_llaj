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

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
