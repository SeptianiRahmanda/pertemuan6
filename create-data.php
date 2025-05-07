<?php
 include_once("konfigurasi.php");
 if(!isset($_POST["simpandata"])){
     die();
 }
 
 $txNIM = $_POST["nim"];
 $txNAMA = $_POST["nama"];
 $txALAMAT = $_POST["alamat"];
 $txTGL = $_POST["tgl_lahir"];
 $txJK = $_POST["jeniskel"];
 
 $sql = "INSERT INTO mhs(nim, nama, alamat, tgl_lahir, jeniskel) VALUES('2401010774', 'Cakra', 'Jl. Hayam Wuruk', '2006-04-26', 'P')";
 $sql = "INSERT INTO mhs(nim, nama, alamat, tgl_lahir, jeniskel) VALUES('$txNIM', '$txNAMA', '$txALAMAT', '$txTGL', '$txJK')";
 
 $res = mysqli_query($koneksi, $sql);
 
 if (!$res) {
     die("Penambahan data gagal");
 }
 
 echo "Penambahan data sukses";
 
 mysqli_close($koneksi);