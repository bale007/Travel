<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_armada extends CI_Model {
    
    function tampil_armada(){
        return $this->db->query('SELECT t_rute.asal,t_rute.tujuan,t_armada.kelas,t_armada.harga_tiket,t_armada.no_travel,t_armada.no_plat,t_armada.jumlah_kursi,t_rute.id_rute 
            FROM t_rute JOIN t_armada 
            USING (id_rute);');
    }

    function simpan_armada()
    {
        $no_travel = $this->input->post('no_travel');
        $no_plat = $this->input->post('no_plat');
        $jumlah_kursi = $this->input->post('jumlah_kursi');
        $id_rute = $this->input->post('id_rute');
        $kelas = $this->input->post('kelas');
        $harga_tiket = $this->input->post('harga'); 
    	
        return $this->db->query("INSERT INTO t_armada (no_travel, no_plat, jumlah_kursi, id_rute, kelas, harga_tiket) VALUES ('$no_travel', '$no_plat', '$jumlah_kursi', '$id_rute', '$kelas', '$harga_tiket');");
    }

    function hapus($no_travel)
    {
        return $this->db->query("DELETE FROM t_armada WHERE no_travel = '$no_travel'");
    }

    function ubah_armada()
    {
        $no_travel = $this->input->post('no_travel_edit');
        $temp = $this->input->post('temp');
        $no_plat = $this->input->post('no_plat_edit');
        $jumlah_kursi = $this->input->post('jumlah_kursi_edit');
        $id_rute = $this->input->post('id_rute_edit');
        $kelas = $this->input->post('kelas_edit');
        $harga = $this->input->post('harga_edit');
        return $this->db->query("UPDATE t_armada SET no_travel = '$no_travel' , no_plat = '$no_plat' , jumlah_kursi = '$jumlah_kursi' , id_rute = '$id_rute' , kelas = '$kelas' , harga_tiket = '$harga' WHERE no_travel = '$temp'; ");
    }
}