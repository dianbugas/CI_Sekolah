<?php

class Ustadz extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ustadz_model');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Ustadz';
        $data['ustadz'] = $this->Ustadz_model->getAllUstadz();
        $this->load->view('templates/header', $data);
        $this->load->view('ustadz/index', $data);
        $this->load->view('templates/footer');
    }
}