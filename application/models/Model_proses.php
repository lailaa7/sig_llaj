<?php


class Model_proses extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('proses_pengaduan');
    }

    public function join_tabel()
    {
        $this->db->select('*');
        $this->db->from('proses_pengaduan');
        $this->db->join('pengaduan', 'proses_pengaduan.no_tiket=pengaduan.no_tiket', 'left');
        $this->db->join('users', 'users.id_user=proses_pengaduan.id_user', 'left');

        return $this->db->get();
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
