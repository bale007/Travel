<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesan extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_pemesan');
        //cek_session();
    }
    
    public function index()
    {
    	$status = $this->input->post('status',true);
    	if ($status == ""){
	        $data["record"] = $this->model_pemesan->tampil_pemesan();
	        $this->load->view('pemesan',$data);
    	}
    	else if ($status <> ""){
	    	$this->model_pemesan->status($status);
	        $data["record"] = $this->model_pemesan->status($status);
	        $this->load->view('pemesan',$data);
    	}
    }

}
