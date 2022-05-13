<?php


class Model_stasiun extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('data_stasiun');
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('data_cctv', array('id_cctv' => $id))->row();
        return $query;
    }
}
