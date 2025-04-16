<?php

    include_once("konfigurasi.php");

    $sql = "INSERT INTO mhs(NIM,Nama,Alamat,Tgl_lahir,Jeniskel) VALUES('11223344','Manda','Gianyar','2003-09-30','P');";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("Penambahan data gagal");
    }

    echo "Penambahan data sukses";
    mysqli_close($koneksi);