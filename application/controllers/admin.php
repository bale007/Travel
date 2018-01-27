<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_rute');
        //cek_session();
    }
    
    public function index()
    {
        $data["record"] = $this->model_rute->tampil_rute();
        //$this->load->view('Home',$data);
        $this->load->view('header_admin');
        $this->load->view('admin',$data);
    }

    function simpan_rute()
    {
    	$this->model_rute->simpan_rute();
    	redirect('admin');
    }

    function hapus()
    {
        $id_rute = $this->input->post('hapus',true);
        $this->model_rute->hapus($id_rute);
        redirect('admin');
    }

    function ubah_rute()
    {
        $this->model_rute->ubah_rute();
        redirect('admin');
    }
}
