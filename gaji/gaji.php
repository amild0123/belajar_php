<!DOCTYPE HTML>
<HTML lang="en">
    <head>
        <title> documen </title>
    </head>

    <body>
        <h3>
            <?php
            echo "gaji pokok kariawan sebesar Rp5.000.000. </br>";
            echo "setiap projek mendapat bonus sebesar Rp.500.000 </br>";
            
            $proyek = 5;
            define("gaji",5000000);
            define("pajak",0.12);
            define("bonus",500000);
 
            // 

            echo "jumlah proyek yang telah di selesai adalah 5 proyek ";
            echo "jumlah bonus Rp".number_format($bonus = $proyek * bonus,0,',','.');
            echo "</br>";
            echo "rincian gaji bersih kariawan pertama </br>";
            echo "gaji pokok Rp5.000.000 ditambah bonus menjadi Rp".number_format($gajiKotor = gaji + $bonus ,0,',','.');
            echo "</br>";
            echo "gaji bersih Rp".number_format($gajiBersih= $gajiKotor - ($gajiKotor * pajak),0,',','.');
            echo "</br>";
            
          
             ?>
         </h3>
    </body>
</html>