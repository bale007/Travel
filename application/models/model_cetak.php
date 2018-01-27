<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_cetak extends CI_Model {
    
    function cari_tiket($no_tagihan){
        return $this->db->query("SELECT t_pemesanan.no_tiket, t_tagihan.nama, t_pemesanan.no_travel, t_pemesanan.tgl_berangkat, t_rute.asal, 
                t_rute.tujuan, t_pemesanan.harga
                FROM t_tagihan INNER JOIN t_pemesanan INNER JOIN t_rute
                ON t_tagihan.no_tagihan = '$no_tagihan' AND '$no_tagihan' = t_pemesanan.no_tagihan AND t_rute.id_rute = t_pemesanan.id_rute
                WHERE t_tagihan.no_tagihan = '$no_tagihan' AND t_tagihan.status_bayar = '1' AND t_pemesanan.status_cetak = '0'");
    }
    
    function cetak_tiket($tiket){
        return $this->db->query("SELECT t_tagihan.nama, t_pemesanan.no_tiket, t_pemesanan.no_travel, t_rute.asal, t_rute.tujuan,
                                 t_pemesanan.tgl_berangkat, t_rute.jam_berangkat, t_pemesanan.harga
                                 FROM t_pemesanan JOIN t_rute JOIN t_tagihan
                                 ON t_tagihan.no_tagihan = t_pemesanan.no_tagihan AND t_pemesanan.id_rute = t_rute.id_rute
                                 WHERE no_tiket = '$tiket'");
    }
    
    function update($id){
        $this->db->query("UPDATE t_pemesanan SET status_cetak = '1' WHERE no_tiket = '$id'");
    }
}