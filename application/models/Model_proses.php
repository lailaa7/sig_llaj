<?php


class Model_proses extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('proses_pengaduan');
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $query = $this->db->update($table, $data);
        return $query;
    }
    public function detail_data($id)
    {
        $query = $this->db->get_where('proses_pengaduan', array('no_tiket' => $id))->row();
        return $query;
    }
}
