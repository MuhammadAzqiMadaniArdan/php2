<?php

$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$name ="";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEnghitung Gaji karyawan</title>
</head>
<body>
    <form action="" method="post">
        <div class="one" style="display: flex;">
        <label for="name">Masukkan Nama Anda
        </label>
        <input type="text" name="name" id="name">
        </div>

        <div class="two" style="display: flex;">
        <label for="gaji_pokok">Masukkan gaji_pokok
        </label>
        <input type="number" name="gaji_pokok" id="gaji_pokok">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- prosess -->

<?php

if(isset($_POST['submit'])){

    // $post disamakan dengan atribut name
    $name=$_POST['name'];
    $gaji_pokok=$_POST['gaji_pokok'];
    //decision

    $tunj =(20 * $gaji_pokok)/100;
    $pjk = (15 *($gaji_pokok + $tunj))/100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;

    echo "Nama : ".$name."<br> Tunjangan :".$tunj."<br> Pajak : ".$pjk."<br> gaji_bersih: ".$gaji_bersih;

}

?>