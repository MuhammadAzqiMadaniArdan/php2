<?php

$tiket;$kategori_tiket;$vip;
$eksekutif;$ekonomi;$tiket_perkelas;
$keuntungan_vip;
$total_untung;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="one" style="display: flex;">
        <label for="tiket">Masukkan tiket
        </label>
        <input type="number" name="tiket" id="tiket">
        </div>

        <div class="two" style="display: flex;">
        <label for="kategori_tiket">Masukkan kategori:
        </label>
        <select name="kategori_tiket" id="">
          <option value="">Pilih kategori</option>
          <option value="vip" name="vip">vip</option>
          <option value="eksekutif" name="eksekutif">eksekutif</option>
          <option value="ekonomi" name="ekonomi">ekonomi</option>
        </select>
        </div>
<!-- 
        <div class="three" style="display: flex;">
        <label for="vip">Masukkan vip
        </label>
        <input type="number" name="vip" id="vip">
        </div>

        <div class="three" style="display: flex;">
        <label for="ekonomi">Masukkan ekonomi
        </label>
        <input type="number" name="ekonomi" id="ekonomi">
        </div> -->

        <div class="four" style="display: flex;">
        <label for="tiket">Masukkan tiket
        </label>
        <input type="number" name="tiket" id="tiket">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- prosess -->
<?php
if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$tiket=$_POST['tiket'];
$kategori_tiket=$_POST['kategori_tiket'];
$vip =50;
$eksekutif =50000;
$ekonomi =10000;

$tiket_perkelas=50;
//rumus
if($kategori_tiket = 'vip'){
    $vip = $eksekutif + $tiket;

    if($vip >=35 ){
        $keuntungan_vip=25/100;
    }

    else if($vip < 35 && $vip >= 20 ){
        $keuntungan_vip= 15/100;
    }
     
    else{
        $keuntungan_vip = 5/100;
    }

}
elseif($kategori_tiket = $eksekutif){
    $eksekutif = $eksekutif + $tiket;

    if($eksekutif >=40 ){
        $keuntungan_eksekutif=20/100;
    }

    else if($eksekutif < 40 && $eksekutif >= 20 ){
        $keuntungan_eksekutif= 10/100;
    }
     
    else{
        $keuntungan_eksekutif = 2/100;
    }
}
else{
    $ekonomi = $ekonomi + $tiket;
    $keuntungan_ekonomi = 7/100;

}

$total_untung=$keuntungan_vip+$keuntungan_eksekutif+$keuntungan_ekonomi;
$total_tiket= $vip + $eksekutif + $ekonomi;

echo "Keuntungan VIp".$keuntungan_vip.$keuntungan_eksekutif.$keuntungan_ekonomi."Total Seluruh".$total_untung."Tiket terjual".$vip.$eksekutif.$ekonomi;


}

?>
