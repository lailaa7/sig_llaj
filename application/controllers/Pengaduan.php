 <?php

    class Pengaduan extends CI_Controller
    {

        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('template/navbar');
            $this->load->view('pengaduan');
            $this->load->view('template/footer');
        }

        public function notiket()
        {
            $CI     = &get_instance();
            $CI->load->database();
            date_default_timezone_set('Asia/Jakarta');
            $tgl_awal = date('Y-m');
            $tgl = str_replace('-','', date('Y-m-d'));
            $start = 0;
            if (date('Y-m') != $tgl_awal)
            {
                $count =10;
                echo rand(10000, 90000) . $tgl. $count + 1;
            } else{
                echo rand(10000, 90000) . $tgl. $start + 1;
            }

        }

        public function tambah_pengaduan()
        {
            $no_tiket     =  ;
            $nama_pengirim        = $this->input->post('nama_pengirim');
            $no_telpon        = $this->input->post('no_telp');
            $lokasi        = $this->input->post('lokasi');
            $deskripsi        = $this->input->post('isi');
            $gambar         = $_FILES['bukti']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './Lampiran';
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('bukti')) {
                    echo "Gambar gagal diupload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'no_tiket'        =>  $no_tiket,
                'nama_pengirim'          => $nama_pengirim,
                'no_telp'           =>  $no_telpon,
                'lokasi'           =>  $lokasi,
                'isi'           =>  $deskripsi,
                'bukti'           =>  $gambar
            );

            $this->model_pengaduan->tambah_data($data, 'pengaduan');
            redirect('no_tiket');
        }
    }
