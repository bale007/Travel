<?php
include '../koneksi.php';

        //simpan di variabel
        $asal = $_POST['asal'];
        $tujuan = $_POST['tujuan'];
        $jam_berangkat = $_POST['jam_berangkat'];
        $jam_tiba = $_POST['jam_tiba'];
        $harga = $_POST['harga'];

        //query insert
        $query = "INSERT INTO t_rute (`id_rute`, `asal`, `tujuan`, `harga_tiket`, `jam_berangkat`, `jam_tiba`) VALUES ('', '$asal', '$tujuan', '$harga', '$jam_berangkat', '$jam_tiba')";
        mysql_query($query);
        echo "$asal, $tujuan, $harga, $jam_berangkat,$jam_tiba";
        header("location/index.php")
?>