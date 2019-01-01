<?php
class Ustadz_model extends CI_model
{
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
    public function getUstadzById($id)
    {
        return $this->db->get_where('ustadz', ['id' => $id])->row_array();
    }

    public function ubahDataUstadz()
    {
        $data = [
            "nrp" => $this->input->post('nrp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('ustadz', $data);
    }

    public function cariDataUstadz()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nrp', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('ustadz')->result_array();
    }
}