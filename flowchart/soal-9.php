<?php

$suhu_f;$suhu_c;

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
        <label for="suhu_f">Masukkan suhu (fahrenheit)
        </label>
        <input type="number" name="suhu_f" id="suhu_f">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    // $post disamakan dengan atribut name
    $suhu_f=$_POST['suhu_f'];
    
    //decision
    $suhu_c = $suhu_f / 33.8;

    if($suhu_c > 300){
        echo "Suhu Panas";
    }

    else if($suhu_c < 250){
        echo "Suhu Dingin";
    }

    else{
        echo "Suhu Normal";
    }    
    
}
?>