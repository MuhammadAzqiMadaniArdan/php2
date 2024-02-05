<?php

$total_gram;$harga_sebelum;$diskon;$harga_setelah;

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
        <label for="total">Masukkan total (gram)
        </label>
        <input type="number" name="total" id="total">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$total_gram=$_POST['total'];

//rumus
$harga_sebelum =5 * $total_gram;
$diskon = 5 * $harga_sebelum / 100;
$harga_setelah = $harga_sebelum - $diskon;

echo "Harga Sebelum : ".$harga_sebelum."<br>Diskon : ".$diskon."<br>Harga Setelah : ".$harga_setelah;
}

?>