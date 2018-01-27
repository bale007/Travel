<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pesan extends CI_Model {
    
    function pesan(){
        $nama  = $this->input->post('nama');
        $nohp  = $this->input->post('nohp');
        $email = $this->input->post('email');
        $kursi = $this->input->post('kursi');
        $no_travel = $this->input->post('notravel');
        $id_rute = $this->input->post('id_rute');
        $harga = $this->input->post('harga');
        $tgl_berangkat = $this->session->userdata('waktu');
        //die(print_r($tgl_berangkat));
        $this->db->query("INSERT INTO t_tagihan (nama,no_hp,waktu_pesan,email,jumlah_kursi) VALUES ('$nama','$nohp',NOW(),'$email','$kursi')");
        $no_tagihan = $this->db->insert_id(); // letakkan tepat dibawah query insert
        for($i=0;$i<$kursi;$i++){
            $this->db->query("INSERT INTO t_pemesanan (no_travel,id_rute,harga,tgl_berangkat,no_tagihan) VALUES ('$no_travel','$id_rute','$harga','$tgl_berangkat','$no_tagihan')");
        }
        return $no_tagihan;
    }
    
    function tampil_pemesan($tagihan){
        return $this->db->query("SELECT t_tagihan.no_tagihan, t_tagihan.nama, t_pemesanan.no_tiket, t_pemesanan.no_travel, t_rute.asal, t_rute.tujuan,
                                t_pemesanan.harga, t_pemesanan.tgl_berangkat,t_rute.jam_berangkat
                                FROM t_pemesanan JOIN t_tagihan JOIN t_rute
                                ON t_tagihan.no_tagihan = '$tagihan' AND '$tagihan' = t_pemesanan.no_tagihan AND t_rute.id_rute = t_pemesanan.id_rute;");   
    }
}