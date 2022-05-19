<?php


class Model_pengaduan extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('pengaduan');
    }

    function tampil_tiket()
    {
        $this->db->order_by('no_tiket', 'DSC');
        return $this->db->from('pengaduan')
            ->join('no_tiket', 'no_tiket.no_tiket=pengaduan.proses_pengaduan');
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
