<?php

    $namaserver = "mysql_db";
    $namadatabase = "db_smartplug";
    $namapengguna = "root";
    $sandi = "root";

    //membuat koneksi
    $koneksi_data = mysqli_connect($namaserver, $namapengguna, $sandi, $namadatabase);

    if (!$koneksi_data) {
        die ("Koneksi dengan database gagal. Cek pengaturan : ".mysqli_connect_error());
    } 
?>