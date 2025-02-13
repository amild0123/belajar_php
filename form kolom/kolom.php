<!DOCTYPE HTML>
<HTML lang="en">
    <head>
        <title> documen </title>
    </head>


<body>
    <p> <label> Kolom   :  </label>
<input type="text" name="satu" placeholder="masukan nilai untuk kolom">
</p>

<p> <label> Baris   :  </label>
<input type="text" name="dua" placeholder="masukan nilai untuk baris">
</p>

<tr>
    <td colspan="3">
        <input type="submit" value="submit" name="Run">
    </td>
</tr>

<?php 

if(isset($_POST['Run']))
$baris= $_POST['baris'];
$kolom= $_POST['kolom'];
?>

<table border=1 style="width: 75%;">

<?php 
for($i=1; $i<= $baris; $i++) {
    ?>
     <tr>
 <?php
     for($y = 1; $y <= $kolom; $y++) {
   ?>
    <td>
      &nbsp;
    </td>
    <?php
        }
       ?>
   </tr>
                <?php
}
?>  
</table>
</body>
    </html>