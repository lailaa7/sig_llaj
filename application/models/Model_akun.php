<?php


class Model_akun extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('users');
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function hapus_data($where, $table)
    {
        $this->db->from($table);
        $this->db->where($where);

        $this->db->delete($table);
    }
}
