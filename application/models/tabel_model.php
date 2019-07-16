<?php
    class tabel_model extends CI_Model
    {
        public function get_data($no_pinjam = NULL)
        {
            if($no_pinjam === NULL)
            {
                $kueri = $this->db->get('pinjam_barang');
                return $kueri->result_array();
            }

            $kueri = $this->db->get_where('pinjam_barang', array('no_pinjam' => $no_pinjam));
            return $kueri->row_array();
        }

        public function tambah_data($data)
        {
            $this->db->insert('pinjam_barang', $data);

            if ($this->db->affected_rows() < 0)
            {return FALSE;}

            return TRUE;
        }

        public function update_data($data)
        {
            $no_pinjam = $this->input->post('no_pinjam');

            $this->db->update('pinjam_barang', $data, array('no_pinjam' => $no_pinjam));

            if ($this->db->affected_rows() < 0)
            {return FALSE;}

            return TRUE;
        }

        public function hapus_data($no_pinjam)
        {
            $this->db->where('no_pinjam', $no_pinjam);
            $this->db->delete('pinjam_barang');

            return TRUE;
        }
    }
    