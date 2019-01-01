<?php
class Guru extends CI_Controller
{
    public function index()
    {
        $data['judul'] = ("Halaman Daftar Guru");
        $this->load->view('templates/header', $data);
        $this->load->view('guru/index');
        $this->load->view('templates/footer');
    }
}