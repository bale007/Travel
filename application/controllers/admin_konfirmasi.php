<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_konfirmasi extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_admin_konfirmasi');
        //cek_session();
    }
    
    public function index()
    {
        $data["record"] = $this->model_admin_konfirmasi->tampil_bukti_konfirmasi();
        //$this->load->view('Home',$data);
        $this->load->view('header_admin');
        $this->load->view('admin_konfirmasi',$data);
    }

    function terima()
    {
        $no_tagihan = $this->input->post('terima',true);
        $this->model_admin_konfirmasi->terima($no_tagihan);
        redirect('admin_konfirmasi');
    }
}
