<?php
    class Ustadz_model extends CI_model{
        public function getAllUstadz()
        {
            return $this->db->get('ustadz')->result_array();
        }

        public function tambahDataUstadz()
        {
            $data = [
                "nrp" => $this->input->post('nrp', true),
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true)
            ];
            $this->db->insert('ustadz', $data);
        }

        public function hapusDataUstadz($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('ustadz');
        }
    }