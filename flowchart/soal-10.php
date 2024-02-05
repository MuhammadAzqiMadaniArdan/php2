<?php

$pabp;$mtk;$dpk;$rata;$nama="";

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
        <label for="pabp">Masukkan Nilai PABP:
        </label>
        <input type="number" name="pabp" id="pabp">
        </div>

        <div class="three" style="display: flex;">
        <label for="mtk">Masukkan Nilai Matematika: 
        </label>
        <input type="number" name="mtk" id="mtk">
        </div>

        <div class="four" style="display: flex;">
        <label for="dpk">Masukkan Nilai DPK: 
        </label>
        <input type="number" name="dpk" id="dpk">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$nama=$_POST['nama'];
$pabp=$_POST['pabp'];
$mtk=$_POST['mtk'];
$dpk=$_POST['dpk'];

//decision
$rata =($pabp + $mtk + $dpk)/3;

if ($rata <= 100 && $rata >= 80 ){
    echo $nama." Nilai kamu A";
}

else if ($rata < 80 && $rata >= 75 ){
    echo $nama." Nilai kamu B";
}

else if ($rata < 75 && $rata >= 65 ){
    echo $nama." Nilai kamu C";
}

else if ($rata < 65 && $rata >= 45 ){
    echo $nama." Nilai kamu D";
}

else if ($rata < 45 && $rata >= 0 ){
    echo $nama." Nilai kamu E";
}

else{
    echo "Angka tidak memenuhi persyaratan atau K ";
}

}
?>