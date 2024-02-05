<?php

$hadir;
$mtk;$indo;$ingg;$dpk;$agama;
$rata;
$nama="";
$data_setiap;
$data;
$total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cek nilaimu!</h2>
    <form action="" method="post">
        <div class="one" style="display: flex;">
        <label for="nama">Masukkan Nama :
        </label>
        <input type="text" name="nama" id="nama">
        </div>
        <div class="two" style="display: flex;">
        <label for="hadir">Masukkan Kehadiran:
        </label>
        <input type="number" name="hadir" id="hadir">
        </div>

        <div class="three" style="display: flex;">
        <label for="mtk">Masukkan Nilai Matematika: 
        </label>
        <input type="number" name="mtk" id="mtk">
        </div>

        <div class="four" style="display: flex;">
        <label for="indo">Masukkan Nilai B.Indo:
        </label>
        <input type="number" name="indo" id="indo">
        </div>

        <div class="five" style="display: flex;">
        <label for="ingg">Masukkan Nilai B.inggris:
        </label>
        <input type="number" name="ingg" id="ingg">
        </div>

        <div class="six" style="display: flex;">
        <label for="dpk">Masukkan Nilai DPK: 
        </label>
        <input type="number" name="dpk" id="dpk">
        </div>

        <div class="seven" style="display: flex;">
        <label for="agama">Masukkan Nilai agama:
        </label>
        <input type="number" name="agama" id="agama">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    // $post disamakan dengan atribut name
    $nama=$_POST['nama'];
    $hadir=$_POST['hadir'];
    $mtk=$_POST['mtk'];
    $indo=$_POST['indo'];
    $ingg=$_POST['ingg'];
    $dpk=$_POST['dpk'];
    $agama=$_POST['agama'];

//decision
$data_setiap= array ($nama,$hadir,$mtk,$indo,$ingg,$dpk,$agama);

$data= array ($data_setiap);

$total=count($data);

if($total == 15){
    
}
else{
    return;
}

}
?>