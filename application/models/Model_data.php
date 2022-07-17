<?php


class Model_data extends CI_Model
{

    public function Tampil_data()
    {
        return $this->db->get('data_llaj');
    }

    public function Tampil_join()
    {
        $this->db->select('*');
        $this->db->from('data_llaj');
        $this->db->join('kategori', 'kategori.id_kategori=data_llaj.id_kategori', 'left');
        return $this->db->get();
    }

    public function Tampil_simpang()
    {
        return $this->db->get('simpang');
    }

    public function Tampil_kelurahan()
    {
        return $this->db->get('kelurahan');
    }

    public function Tampil_kategori()
    {
        return $this->db->get('kategori');
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
        $query = $this->db->get_where('data_cctv', array('id_cctv' => $id))->row();
        return $query;
    }
}
