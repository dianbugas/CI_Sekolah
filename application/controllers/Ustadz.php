<?php

class Ustadz extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ustadz_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Ustadz';
        $data['ustadz'] = $this->Ustadz_model->getAllUstadz();
        $this->load->view('templates/header', $data);
        $this->load->view('ustadz/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Ustadz';
        
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat');

        if ( $this->form_validation->run() == FALSE ){ 
            $this->load->view('templates/header', $data);
            $this->load->view('ustadz/tambah');
            $this->load->view('templates/footer');
        }else{
            $this->Ustadz_model->tambahDataUstadz();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('ustadz');
        }

    }

    public function hapus($id)
    {
        $this->Ustadz_model->hapusDataUstadz($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ustadz');
    }
}