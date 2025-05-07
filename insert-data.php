<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Insert Data</title>
 </head>
 
 <body>
     <form action="create-data.php" method="POST">
         <div>
             <label>NIM</label>
             <input type="text" name="nim">
         </div>
         <div>
             <label>Nama</label>
             <input type="text" name="nama">
         </div>
         <div>
             <label>Alamat</label>
             <input type="text" name="alamat">
         </div>
         <div>
             <label>Tanggal Lahir</label>
             <input type="date" name="tgl_lahir">
         </div>
         <div>
             <label>Jenis Kelamin</label>
             <select name="jeniskel">
                 <option disabled selected>Pilih Jenis Kelamin</option>
                 <option value="L">Laki - laki</option>
                 <option value="P">Perempuan</option>
             </select>
         </div>
         <div>
             <button type="submit">Submit</button>
             <button type="submit" name="simpandata">Submit</button>
         </div>
     </form>
 </body>
 