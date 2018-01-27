<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class armada extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('model_rute','model_armada'));
        //cek_session();
    }
    
    public function index()
    {
        $data["record"] = $this->model_armada->tampil_armada();
        $data["record1"] = $this->model_rute->tampil_rute();
        //$this->load->view('Home',$data);
        $this->load->view('header_admin');
        $this->load->view('armada',$data);

        
    }

    function simpan_armada()
    {
    	$this->model_armada->simpan_armada();
    	redirect('armada');
    }

    function hapus()
    {
        $no_travel = $this->input->post('hapus',true);
        $this->model_armada->hapus($no_travel);
        redirect('armada');
    }

    function ubah_armada()
    {
        $this->model_armada->ubah_armada();
        redirect('armada');
    }

    function buat_simpan()
    {
        $id_rute = $this->input->post("id",true);
        //die(print_r($id_rute));
         foreach ($this->model_rute->tampil_rute()->result() as $r1){
            echo '<option value="'.$r1->id_rute.'"';
            echo $id_rute == $r1->id_rute?'selected':'';
            echo '>'.$r1->asal.' - '.$r1->tujuan.'</option>';
        }  
    }
}
