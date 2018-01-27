<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rute extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_rute');
        //cek_session();
    }
    
    public function index()
    {   
        $waktu = $this->input->post('waktu');
        //die(print_r($waktu));
        $this->session->set_userdata(array('waktu'=>$waktu));
        if($this->session->userdata('rute')==""){
            $id_rute = $this->input->post('idrute');
            $this->session->set_userdata(array('rute'=>$id_rute));
        }
        $id_rute = $this->session->userdata('rute');
        $data["record"] = $this->model_rute->tampil_pilih_rute($id_rute);
        //die(print_r($data));
        $data["judul"] = "Daftar Rute";
        $this->load->view('header',$data);
        $this->load->view('pilih_travel',$data);

    }
    
    public function pesan() 
    {
        $data['no_travel'] = $this->uri->segment(3);
        $data['id_rute'] = $this->uri->segment(4);
        $data['harga'] = $this->uri->segment(5);
        $data["judul"] = "Pesan Sekarang !";
        $data['waktu'] = $this->session->userdata('waktu');
        $data['kursi'] = $this->model_rute->jumlah_kursi($data)->result();
        //die(print_r($data['kursi']));
        $this->load->view('header',$data);
        //die(print_r($this->uri->segment(3)));
        $this->load->view('input',$data);
    }
}
