<?php


class Model_halte extends CI_Model{

    public function Tampil_data()
    {
        return $this->db->get('data_halte');
    }

    public function Tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function Hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
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

    public function Detail_data($id = NULL)
    {
        $query = $this->db->get_where('data_halte', array('id_halte' => $id))->row();
        return $query;
    }
}

?>