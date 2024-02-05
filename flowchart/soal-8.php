<?php

$bil;$satuan;$puluhan;$ratusan;

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
        <label for="bilangan">Masukkan bilangan :
        </label>
        <input type="number" name="bilangan" id="bilangan">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$bil=$_POST['bilangan'];

//decision
$satuan = $bil % 10;
$puluhan = floor ($bil / 10) % 10;
$ratusan = floor ($bil /100);

echo "satuan: ".$satuan."<br>Puluhan : ".$puluhan."<br>Ratusan : ".$ratusan;
}

?>