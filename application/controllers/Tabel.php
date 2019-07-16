<?php
    class Tabel extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('tabel_model');
        }

        public function index()
        {
            $data['peminjaman'] = $this->tabel_model->get_data();

            $this->load->view('templates/kepala');
            $this->load->view('tabel/index', $data);
            $this->load->view('templates/kaki');
        }

        public function tambah()
        {
            echo 'sabar...';
            echo '<br>';

            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_brg' => $this->input->post('nama_brg'),
                'jml_pinjam' => $this->input->post('jml_pinjam'),
                'peminjam' => $this->input->post('peminjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'keterangan' => $this->input->post('keterangan')
            );

            $tambahdata = $this->tabel_model->tambah_data($data);

            if ($tambahdata == TRUE)
            {
                echo 'uhsheup....';
                redirect('tabel', 'refresh');
            }
        }

        public function ambildata($no_pinjam = NULL)
        {
            try {
                if($no_pinjam != NULL)
                {
                    $data['peminjaman'] = $this->tabel_model->get_data($no_pinjam);

                    http_response_code(200);
                    echo stripslashes(json_encode($data['peminjaman']));
                } else {
                    http_response_code(204);
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function update()
        {
            echo 'sabar...';
            echo '<br>';

            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_brg' => $this->input->post('nama_brg'),
                'jml_pinjam' => $this->input->post('jml_pinjam'),
                'peminjam' => $this->input->post('peminjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'keterangan' => $this->input->post('keterangan')
            );

            $update = $this->tabel_model->update_data($data);

            if ($update == TRUE)
            {
                echo 'uhsheup sukses cyin....';
                redirect('tabel');
            } else {
                echo 'hayuu error.';
            }
        }

        public function hapus($no_pinjam)
        {
            echo 'sabar...';
            echo '<br>';

            $hapus = $this->tabel_model->hapus_data($no_pinjam);

            if ($hapus == TRUE)
            {
                echo 'uhsheup sukses. kembali ke tabel...';
                redirect('tabel', 'refresh');
            }

            echo 'hayu eror';
        }
    }
    