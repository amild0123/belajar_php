<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Biodata</title>
</head>

<body>
  
<form action="hasil.php" method="POST">
<legend><h1> Penghitungan Gaji Kariyawan </h1> </legend>

<p> <label> Masukan Nama Anda   :  </label>
<input type="text" name="nama" placeholder="masukan nilai gaji anda">
</p>

<p> <label> Masukan Bagian Divisi Anda    :  <label>
    <input type="text" name="divi" placeholder="masukan Bagian Divisi Anda">
</p>

<p> <label> Masukan Nilai Gaji Bulanan Anda   :  </label>
<input type="teks" name="gaji" placeholder="masukan nilai gaji anda">
</p> 

<p> <label> Apakah anda memiliki NPWP atau Tidak? </label>
<select name="npwp" id=" ">
    <option value="Ya"> YA memiliki </option>
    <option value="Tidak"> TIDAK memiliki</option>
</p>
<p>
  <input type="submit" name="submit" value="Input Data">
</p>


</body>
</html>