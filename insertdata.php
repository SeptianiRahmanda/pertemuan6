<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    
<form action="createdata.php" method="POST">
    <div> 
    <label>NIM</label>
    <input type="text" name="NIM">
    </div>
    <div>
    <label>Nama</label>
    <input type="text" name="Nama">
    </div>
    <div>
    <label>Alamat</label>
    <input type="text" name="Alamat">
    </div>
  <div>
  <label>Tgl_lahir</label>
  <input type="date" name="Tgl_lahir">
  </div>
   <div>
   <label>Jeniskel</label> 
   <select name="JK">
<option disabled>Pilih Jenis Kelamin</option>
<option value="L">Laki-Laki</option>
<option value="P">Perempuan</option>
   </select>
   </div>
   <div>
       <button type = "submit">submit</button>
   </div>
    

</form>

</body>
</html>