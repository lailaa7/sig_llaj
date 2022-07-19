 <?php

    class Model_auth extends CI_Model
    {

        public function Cek_user($username) //untuk mengecek apakah ada atau tidaknya
        {
            $query = $this->db->query("SELECT * FROM users WHERE username = '$username' ");

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }

        public function Cek_login($username, $password)
        {
            $query = $this->db->query("SELECT * FROM users WHERE username = '$username' and password = '$password' ");

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }
        public function cek($where, $tabel)
        {
            return $this->db->get_where($tabel, $where);
        }
        public function Update_data($where, $data, $table)
        {
            $this->db->where($where);
            return $this->db->update($table, $data);
        }
    }
    ?>
