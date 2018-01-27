<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_konfirmasi extends CI_Model {

    function cek()
    {
        $no_tagihan = $this->input->post('no_tagihan');
        $bukti = $this->input->post('bukti');
    	
        return $this->db->query("INSERT INTO t_konfirmasi (no_tagihan, bukti) VALUES ('$no_tagihan', '$bukti');");
    }

}