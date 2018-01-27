<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_konfirmasi');
        //cek_session();
    }
    
    public function index()
    {
        //$data["record"] = $this->model_konfirmasi->tampil_tiket();
        $data["judul"] = "Travelakku Dulu";
        $this->load->view('header',$data);
        $this->load->view('konfirmasi',$data);
    }

    function cek()
    {
       $this->model_konfirmasi->cek();
        redirect('konfirmasi'); 
    }
}