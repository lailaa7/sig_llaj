<?php


class Model_peta extends CI_Model
{

    public function tampil_cctv()
    {
        return $this->db->get('data_cctv');
    }

    function tampil_peta()
    {
        $this->db->select('*');
        $this->db->from('data_llaj');
        $this->db->join('kategori', 'kategori.id_kategori = data_llaj.id_kategori');
        return $this->db->get();
    }

    public function detail_data($id)
    {
        $this->db->select('*');
        $this->db->from('data_llaj');
        $this->db->where('id_data', $id);
        return $this->db->get()->row();
    }
}
