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

        // public function notiket()
        // {
        //     $CI     = &get_instance();
        //     $CI->load->database();
        //     date_default_timezone_set('Asia/Jakarta');
        //     $tgl_awal = date('Y-m');
        //     $tgl = str_replace('-','', date('Y-m-d'));
        //     $start = 0; 
        //     if (date('Y-m') != $tgl_awal)
        //     {
        //         $count =10;
        //         echo rand(10000, 90000) . $tgl. $count+1;
        //     } else{
        //         echo rand(10000, 90000) . $tgl. $start+1;
        //     }

        // }

        public function tambah_pengaduan()
        {
            $this->form_validation->set_rules(
                'nama_pengirim',
                'Nama ',
                'required',
                array('required' => '%s tidak boleh kosong')
            );
            $this->form_validation->set_rules(
                'no_telp',
                'No Telepon',
                'required',
                array('required' => '%s tidak boleh kosong')
            );
            $this->form_validation->set_rules(
                'lokasi',
                'Lokasi',
                'required',
                array('required' => '%s tidak boleh kosong')
            );
            $this->form_validation->set_rules(
                'isi',
                'Deskripsi Pengaduan',
                'required',
                array('required' => '%s tidak boleh kosong')
            );
            // $this->form_validation->set_rules(
            //     'bukti',
            //     'Bukti',
            //     'required',
            //     array('required' => '%s tidak boleh kosong')
            // );


            if ($this->form_validation->run() == false) {
                $this->load->view('template/header');
                $this->load->view('template/navbar');
                $this->load->view('pengaduan');
                $this->load->view('template/footer');
            } else {
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
                    'nama_pengirim'        =>  $this->input->post('nama_pengirim'),
                    'no_telp'        =>  $this->input->post('no_telp'),
                    'lokasi'           =>  $this->input->post('lokasi'),
                    'isi'           => $this->input->post('isi'),
                    'bukti'           =>  $gambar,
                    'tgl_pengaduan'  => date('d-m-y H:i:s')
                );
                $this->model_pengaduan->tambah_data($data, 'pengaduan');
                redirect('no_tiket');
            }
        }
    }
