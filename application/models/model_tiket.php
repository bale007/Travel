<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_tiket extends CI_Model {
    
    function tampil_tiket(){
        return $this->db->query('SELECT * FROM t_rute');
    }
}