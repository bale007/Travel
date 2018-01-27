<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_rute extends CI_Model {
    
    function tampil_rute(){
        return $this->db->query('SELECT * FROM t_rute');
    }

    function tampil_pilih_rute($id_rute){
        return $this->db->query("SELECT t_rute.asal, t_rute.tujuan, t_armada.no_travel, t_armada.harga_tiket, t_rute.jam_berangkat, t_rute.id_rute ,t_armada.kelas
            FROM t_rute JOIN t_armada USING (id_rute)
            WHERE t_rute.id_rute='$id_rute'");
    }

    function simpan_rute()
    {
    	
        $asal = $this->input->post('asal');
        $tujuan = $this->input->post('tujuan');
        $jam_berangkat = $this->input->post('jam_berangkat');
        $jam_tiba = $this->input->post('jam_tiba');

        return $this->db->query("INSERT INTO t_rute (asal, tujuan, jam_berangkat, jam_tiba) VALUES ('$asal', '$tujuan', '$jam_berangkat', '$jam_tiba');");
    }

    function hapus($id_rute)
    {
        return $this->db->query("DELETE FROM t_rute WHERE id_rute = '$id_rute'");
    }

    function ubah_rute()
    {
        $id_rute = $this->input->post('id_rute_edit');
        $asal = $this->input->post('asal_edit');
        $tujuan = $this->input->post('tujuan_edit');
        $jam_berangkat = $this->input->post('jam_berangkat_edit');
        $jam_tiba = $this->input->post('jam_tiba_edit');

        return $this->db->query("UPDATE t_rute SET asal = '$asal' , tujuan = '$tujuan' , jam_berangkat = '$jam_berangkat' , jam_tiba = '$jam_tiba' WHERE id_rute = '$id_rute'; ");
    }

    function jumlah_kursi($data){
        $id_rute   = $data['id_rute'];
        $no_travel = $data['no_travel'];
        $waktu     = $data['waktu'];
        $query = "SELECT (SELECT `jumlah_kursi`
                    FROM t_armada
                    WHERE `id_rute` = '$id_rute' AND no_travel = '$no_travel') - (
                    SELECT COUNT(no_tiket) AS jml_tiket FROM validasi
                    WHERE TIMEDIFF(NOW(),`waktu_pesan`) < '01:00' AND `tgl_berangkat` = '$waktu' AND `status_bayar` = '0' 
                    AND `id_rute` = '$id_rute' AND `no_travel` = '$no_travel') - (SELECT COUNT(`no_tiket`) AS ada FROM `t_pemesanan` JOIN `t_tagihan`
                    USING (`no_tagihan`)
                    WHERE `status_bayar` = '1' AND `no_travel` = '$no_travel' AND `tgl_berangkat` = '$waktu' AND id_rute = '$id_rute') AS sisa";
        return $this->db->query($query);
    }
}