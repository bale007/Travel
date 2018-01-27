<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pemesan extends CI_Model {
    
    function tampil_pemesan(){
        return $this->db->query("SELECT t_tagihan.no_tagihan, t_tagihan.nama, t_pemesanan.no_tiket, t_pemesanan.no_travel, t_rute.asal, t_rute.tujuan,
                                t_pemesanan.harga, t_pemesanan.tgl_berangkat
                                FROM t_pemesanan JOIN t_tagihan JOIN t_rute
                                ON t_tagihan.no_tagihan = t_pemesanan.no_tagihan AND t_rute.id_rute = t_pemesanan.id_rute;");   
    }

     function status($status)
    {
        return $this->db->query("SELECT t_tagihan.no_tagihan, t_tagihan.nama, t_pemesanan.no_tiket, t_pemesanan.no_travel, t_rute.asal, t_rute.tujuan,
                                t_pemesanan.harga, t_pemesanan.tgl_berangkat
                                FROM t_pemesanan JOIN t_tagihan JOIN t_rute
                                ON t_tagihan.no_tagihan = t_pemesanan.no_tagihan AND t_rute.id_rute = t_pemesanan.id_rute
                                WHERE t_tagihan.status_bayar = '$status';");
    }

    
}