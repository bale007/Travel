<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_tiket');
        //cek_session();
    }
    
    public function index()
    {
        $this->session->sess_destroy();
        $data["record"] = $this->model_tiket->tampil_tiket();
        $data["judul"] = "Travelakku Dulu";
        $this->load->view('header',$data);
        $this->load->view('Home',$data);
    }
}
