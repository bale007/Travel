<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_admin_konfirmasi extends CI_Model {
    
    function tampil_bukti_konfirmasi(){
        return $this->db->query("SELECT t_tagihan.no_tagihan, t_tagihan.nama, t_konfirmasi.bukti FROM t_tagihan JOIN t_konfirmasi USING (no_tagihan)
            WHERE status_bayar = '0'");
    }

    function terima($no_tagihan)
    {
        return $this->db->query("UPDATE t_tagihan SET status_bayar = '1' WHERE no_tagihan = '$no_tagihan';");
    }

}