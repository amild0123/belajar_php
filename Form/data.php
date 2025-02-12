<!DOCTYPE php>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Form Biodata</title>

<body>
     
<h1> Hasil data </h1> 
<tr>
<td>NISN :</td>
<td> <?= $_POST['NISN'];?><br></td>
</tr>

<tr>
<td>Nama :</td>
<td> <?= $_POST['NAMA'];?><br></td>
</tr>

<tr>
<td>Tempat Lahir :</td>
<td> <?= $_POST['tempatLahir'];?><br></td>
</tr>

<tr>
  <td>Tanggal Lahir :</td>
  <td> <?= $_POST['tanggal'];?><br></td>
</tr>

<tr>
<td>Jenis Kelamin :</td>
<td> <?= $_POST['gender'];?><br></td>
</tr>

<tr>
   <td>Agama :</td>
   <td><?= $_POST['agama'];?><br></td>
</tr>

<tr>
 <td>Alamat :</td>
 <td><?= $_POST['alamat'];?><br></td>
     
</tr>


<tr>
  <td>Asal Sekolah :</td>
  <td><?= $_POST['asalSekolah'];?></td>
</tr>

<tr>
  <td>Asal Sekolah :</td>
  <td><?= $_POST['sekolahTujuan'];?><br></td>
</tr>

<tr>
  <td>Pilih Jurusan  :</td>
  <td><?= $_POST['Jurusan'];?><br></td>
</tr>

   <tr>
     <td>Pilih Course:</td>
     <td> <?= implode(",", $_POST['ekskul'];) ?> </td>
   </tr>

</body>

</html>
