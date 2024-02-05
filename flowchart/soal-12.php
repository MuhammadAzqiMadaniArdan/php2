<?php

$hh;
$mm;
$ss;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 5px 5px;
    }
    .content1{
        display: flex;
        justify-content: center;
    }
    .forum{
        margin: 2% 0% ;
        border-radius: 50px;
        background:linear-gradient(blue,aqua);
        width: 60%;
        height: 100%;
        padding: 30px 20px;
        text-align: center;
      }

      .forum input{
        width: 10%;
        border-radius: 500px;
        border-color: whitesmoke;
        margin-bottom: 10px;
      }

      .one{
        display: flex;
        justify-content: center;
      }

      h2{
        color: white;
        font-weight: bolder;
        text-align: center;
      }

      h1{
        margin-top: 2%;
        color: blue;
        box-shadow: darkblue;
        
        text-align: center;
      }

      .forum label{
        color: white;
        font-size: 20px;
      }

      .content2{
        
        display: flex;
        justify-content: center;
      }

      .card{
        border-radius: 50px;
        background:linear-gradient(aqua,blue);
        width: 70%;
        height: 100%;
        padding: 30px 20px;
        text-align: center;
        color: white;
        font-size:large;
      }

      button {
        margin:10px;
        background: linear-gradient(darkorange,yellow);
        padding: 8px 20px;
        border-radius: 50px;
        border-color: orange;
        font-weight: bolder;
      }

</style>
<body>
    <h1>AzKuy!</h1>
    <div class="content1">
        <form class="forum" action="" method="post">
        <h2>Penambahan Waktu +1 detik</h2>
        <div class="one" style="display: flex;">
            <label for="jam">Masukkan jam:
                </label>
                <input type="number" name="jam" id="jam">
        </div>

        <div class="one" style="display: flex;">
            <label for="menit">Masukkan Menit:
            </label>
            <input type="number" name="menit" id="menit">
        </div>

        <div class="one" style="display: flex;">
            <label for="detik">Masukkan detik:
            </label>
            <input type="number" name="detik" id="detik">
        </div>

        <button type="submit" name="submit">Kirim</button>
    </form>
    </div>
    <div class="content2">
        <div class="card">
          <h2>Hasil:</h2>
        <?php
if (isset($_POST['submit'])) {

    // $post disamakan dengan atribut name
    $hh = $_POST['jam'];
    $mm = $_POST['menit'];
    $ss = $_POST['detik'];

    //decision
    $ss = $ss + 1;

    if ($ss >= 60) {
        $mm = $mm + 1;
        $ss = "00";
    }

    else{
      $ss="00";
    }

    if ($mm >= 60) {
        $hh = $hh + 1;
        $mm = "00";
        $ss = "00";
    }
    if ($hh >= 24) {
        $hh = "00";
        $mm = "00";
        $ss = "00";
    }

    echo $hh . ":" . $mm . ":" . $ss;
}

?>
        </div>
    </div>
</body>

</html>

