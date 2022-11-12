<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAPETI</title>
</head>
    
<body>
</body>
<?php
     $id=$_POST['id'];
     $nama=$_POST['nama'];
     $alamat=$_POST['alamat'];
     $artis=$_POST['artis'];
     $duduk=$_POST['duduk'];
     $jumlah=$_POST['jumlah'];


if ($artis=="GF"){
    $nama1="Glen Fredly";
    $waktu="19.00-21.00 WIB";
    }
else if($artis=="IL"){
    $nama1="Indra Lesmana";
    $waktu="13.00-15.00 WIB";
    }
else {
    $nama1="Tompi";
    $waktu="10.00-12.00 WIB";
    }

if ($duduk=="Tribune"){
    $harga=350000;
    }
else if ($duduk=="VIP"){
    $harga=500000;
    }
else {
    $harga=1500000;
    }
$totalharga=$jumlah*$harga;

if ($jumlah >= 5){
    $diskon=0.05 * $harga;
    }
else{
    $diskon=0;
    }
   
$totalbayar=$totalharga-$diskon;

?>

<pre>
Id pemesanan     : <?php echo $id ; ?> <br>
Nama Pemesanan   : <?php echo $nama ; ?> <br>
Alamat           : <?php echo $alamat ; ?> <br>
Kode Artis       : <?php echo $artis ; ?> <br>
Nama Artis       : <?php echo $nama1 ; ?> <br>
Waktu            : <?php echo $waktu ; ?> <br>
Tempat Duduk     : <?php echo $duduk ; ?> <br>
Harga            : <?php echo "Rp.".number_format($harga) ; ?> <br>
Jumlah Beli      : <?php echo $jumlah ; ?> <br>
Diskon           : <?php echo "Rp.".number_format($diskon) ; ?> <br>
---------------------------------------------
Total Bayar      : <?php echo "Rp.".Number_format($totalbayar) ; ?> <br>
---------------------------------------------

<a href="Next.php">INPUT DATA LAGI </a>

</html>