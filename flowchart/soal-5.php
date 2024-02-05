<?php

$jam;$menit;$detik;$total;

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
        <label for="jam">Masukkan Jam
        </label>
        <input type="number" name="jam" id="jam">
        </div>

        <div class="two" style="display: flex;">
        <label for="menit">Masukkan Menit
        </label>
        <input type="number" name="menit" id="menit">
        </div>

        <div class="three" style="display: flex;">
        <label for="detik">Masukkan Detik
        </label>
        <input type="number" name="detik" id="detik">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- prosess -->
<?php
if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$jam=$_POST['jam'];
$menit=$_POST['menit'];
$detik=$_POST['detik'];
//rumus
$jam *= 3600;
$menit *= 60;
$total = $jam + $menit + $detik;

echo "<br>".$total." Detik";

}

?>
