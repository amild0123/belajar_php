<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Form Biodata</title>

<body>

<form action="data.php" method="POST">
<fieldset>
<legend><h1>Formulir peserta PPDB </h1> </legend>

<p>
<label>NISN :</label>
<input type="text" name="NISN" placeholder=" Masukan NISN Anda">
</p>

<p>
<label>Nama :</label>
<input type="text" name="NAMA" placeholder="Masukan Nama lengkap Anda">
</p>

<p>
<label>Tempat Lahir :</label>
<input type="text" name="tempatLahir" placeholder="MasukantempatLahirAnda">
</p>

<p>
  <label>Tanggal Lahir :</label>
  <input type="date" name="tanggal">
</p>

<p>
<label>Jenis Kelamin :</label>
<input type="radio" name="gender" value="laki-laki">Laki-laki
<input type="radio" name="gender" value="perempuan">Perempuan
</p>

<p>
   <label>Agama :</label>
<select name="agama" id=" ">
<option value="budha">Budha</option>
<option value="hindu">Hindu</option>
<option value="islam">Islam</option>
<option value="katholik">Kristen Katholik</option>
<option value="protestan">Kristen Protestan</option>
<option value="konghuchu">konghucu</option>
</select>
</p>

<p>
 <p>Alamat :</p>
     <textarea name="alamat"cols="50" rows="10"></textarea>
</p>
</p>

<p>
  <label>Asal Sekolah :</label>
  <input type="asal sekolah" name="asalSekolah" placeholder="Asal Sekolah anda">
</p>

<p>
  <label>Asal Sekolah :</label>
  <input type="sekolah tujuan" name="sekolahTujuan" placeholder="Sekolah tujuan anda">
</p>

<p>
  <label>Pilih Jurusan  :</label>
    <select name="Jurusan" id=" ">
    <option value=" ">pilih Jurusan</option>
    <option value="akl">Akuntansi keuangan lembaga</option>
    <option value="mplb">Manajemen Perkantoran dan Layanan Bisnis</option>
    <option value="pplg">Pengembangan Perangkat Lunak dan Gim</option>
    <option value="tjkt">Teknik Jaringan Komputer dan teleKomunikasi</option>
    <option value="dkv">Desain Komunikasi Visual</option>
    <option value="bcf">BroadCasting dan perFilman</option>
    <option value="sp">Seni Tari</option>
    <option value="ph">Perhotelan</option>
    <option value="pm">Pemasaran</option>
    <option value="kl">Kuliner</option>
    </select>
</p>

   <p>
     <label>Pilih Course:</label>
     <input type="checkbox" name="ekskul[ ]" value="osis"> Organisasi Siswa Intra Sekolah
     <input type="checkbox" name="ekskul[ ]" value="gds">Gerakan Disiplin Siswa
     <input type="checkbox" name="ekskul[ ]" value="pmr">Palang Merah Remaja
     <input type="checkbox" name="ekskul[ ]" value="pramuka">Pramuka
     <input type="checkbox" name="ekskul[ ]" value="remas">Remaja Masjid Al-Kautsar
     <input type="checkbox" name="ekskul[ ]" value="teater">Teater Kusuma
     <input type="checkbox" name="ekskul[ ]" value="lh">Laskar Hijau
     <input type="checkbox" name="ekskul[ ]" value="pa">Pecinta Alam
     <input type="checkbox" name="ekskul[ ]" value="voli">voli
     <input type="checkbox" name="ekskul[ ]" value="basket">Basket
     <input type="checkbox" name="ekskul[ ]" value="futsal">Futsal
   </p>

  <p>
  <input type="submit" name="submit" value="Input Data">
</p>

</fieldset>

</form>

</body>

</html>
