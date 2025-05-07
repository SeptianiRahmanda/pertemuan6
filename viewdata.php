<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>View Data Mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
 
 <body>
     <h3>Data Mahasiswa</h3>
     <a href="insert-data.php">Tambah</a>
     <table border="1" class="table table-striped">
         <thead>
             <tr>
                 <th>No</th>
                 <th>NIM</th>
                 <th>Nama</th>
                 <th>Aksi</th>
             </tr>
         </thead>
         <tbody>
             <?php
             $sql = "SELECT nim, nama FROM mhs;";
             include_once("konfigurasi.php");
             $res = mysqli_query($koneksi, $sql);
 
             $no = 0;
             while ($row = mysqli_fetch_array($res)) {
                 $no++;
                 ?>
                 <tr>
                     <td><?= $no ?></td>
                     <td><?= $row["nim"] ?></td>
                     <td><?= $row["nama"] ?></td>
                     <td>
                         <a href="editdata.php?nim=<?= $row["nim"] ?>" class="btn btn-warning">ubah</a>
                         <a href="deldata.php?nim=<?= $row["nim"] ?>" class="btn btn-danger">hapus</a>
                     </td>
                 </tr>
                 <?php
             }
             ?>
         </tbody>
     </table>
 </body>
 
 </html>