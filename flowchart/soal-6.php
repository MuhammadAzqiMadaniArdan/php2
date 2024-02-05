<?php

$waktu;
$jam;
$menit;
$detik;
// untuk mendefinisikan var string mengunkan tanda kutip
$hasil ="";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu</title>
</head>
<body>
    <form action="" method="post">
        <div class="one" style="display: flex;">
        <label for="waktu">Masukkan Waktu Awal (detik):
        </label>
        <input type="number" name="waktu" id="waktu">
        </div>
        
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<!-- prosess -->
<?php

if(isset($_POST['submit'])){

    // $post disamakan dengan atribut name
    $waktu=$_POST['waktu'];
    //decision
    
    // floor : membulatkan  kebawah
    // ceil : membulatkan Keatas
    //round : membulatkan keatas dan kebawah tergantung kondisi
    
    if($waktu >= 3600){
        $jam =floor($waktu/3600);
        $waktu -= ($jam *3600);
        $hasil .= $jam . "jam";
    }

    else{
        $hasil .= 0 ."jam";
    }

    if($waktu >= 60){
        $menit =floor($waktu/60);
        //memakai -= yang berarti $waktu = $waktu - ($menit * 60);
        $waktu -= ($menit *60);
        $hasil .= $menit ."menit";
    }

    else{
        $hasil .= 0 ."menit";
    }

    $detik = $waktu;
    $hasil .=$detik ."detik";

    echo $hasil;

}


?>
