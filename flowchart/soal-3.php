<?php

$bil_satu;
$bil_dua;
$bil_tiga;

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
        <label for="angka_pertama">Masukkan Angka Pertama
        </label>
        <input type="number" name="angka_pertama" id="angka_pertama">
        </div>

        <div class="two" style="display: flex;">
        <label for="angka_kedua">Masukkan Angka kedua
        </label>
        <input type="number" name="angka_kedua" id="angka_kedua">
        </div>

        <div class="three" style="display: flex;">
        <label for="angka_ketiga">Masukkan Angka ketiga
        </label>
        <input type="number" name="angka_ketiga" id="angka_ketiga">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- prosess -->

<?php

if(isset($_POST['submit'])){

    // $post disamakan dengan atribut name
    $bil_satu=$_POST['angka_pertama'];
    $bil_dua=$_POST['angka_kedua'];
    $bil_tiga=$_POST['angka_ketiga'];
    //decision

    if($bil_satu == $bil_dua && $bil_satu == $bil_tiga){
        echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
        "||Bilangan Ketiga : ".$bil_tiga."<b>BILANGAN SAMA BESAR</b>";

    }
    else if($bil_satu >= $bil_dua   && $bil_satu >=$bil_tiga ){
        echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
        "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_satu."</b>";
        
    }
    else if($bil_dua >= $bil_satu && $bil_dua >= $bil_tiga){
        echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
        "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_dua."</b>";

    }
    else {
        echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
        "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_tiga."</b>";

    }
    // else if($bil_tiga && $bil_satu > $bil_dua && $bil_tiga > $bil_dua){
    //     echo "Bilangan pertama : ".$bil_satu."|| Bilangan Kedua : ".$bil_dua.
    //     "||Bilangan Ketiga : ".$bil_tiga."Yang terbesar : "."<b>".$bil_tiga."</b>";

    // }
    
}

?>