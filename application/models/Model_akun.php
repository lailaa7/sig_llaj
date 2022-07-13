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

    public function Edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function Update_data($where, $data, $table)
    {
        $this->db->where($where);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function hapus_data($where, $table)
    {
        $this->db->from($table);
        $this->db->where($where);

        $this->db->delete($table);
    }
}
