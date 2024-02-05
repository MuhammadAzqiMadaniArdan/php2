<?php

$no_pegawai;$no_gol;$tanggal;$bulan;$tahun;$no_urut;
$tanggal_lahir;

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
    .content{
        display: flex;
        justify-content: center;
    }
    .forum{
        margin: 2% 0% ;
        border-radius: 50px;
        background:linear-gradient(blue,aqua);
        width: 70%;
        height: 100%;
        padding: 30px 20px;
      }

      .forum input{
        width: 100%;
        border-radius: 500px;
        border-color: whitesmoke;
        margin-top: 10px;
        margin-bottom: 10px;
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
    <div class="content">
        <form class="forum" action="" method="post">
        <h2>Cek No Pegawaimu!</h2>
        <div class="one" >
        <label for="no_pegawai">Masukkan No_pegawai:
        </label>
        <br>
        <input type="number" name="no_pegawai" id="no_pegawai">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</div>
<div class="content2">
<div class="card">
    <h2>Hasilnya :</h2>
    <?php
if(isset($_POST['submit'])){

// $post disamakan dengan atribut name
$no_pegawai=$_POST['no_pegawai'];

//decision
//substrval
// $no_pegawai =strval($no_pegawai);


if($no_pegawai < 10000000000  or $no_pegawai > 100000000000 ){
    echo "no pegawai tidak sesuai";
}
else{
$no_gol =substr($no_pegawai,0,1);
$tanggal =substr($no_pegawai,1,2);
$bulan =substr($no_pegawai,3,2);
$tahun =substr($no_pegawai,5,4);
$no_urut =substr($no_pegawai,9,2);

if($bulan == "01"){
    $bulan ="Januari";
}

else if($bulan == "02"){
    $bulan ="Februari";
}
else if($bulan == "02"){
    $bulan ="Februari";
}
else if($bulan == "03"){
    $bulan ="Maret";
}
else if($bulan == "04"){
    $bulan ="April";
}
else if($bulan == "05"){
    $bulan ="Mei";
}
else if($bulan == "06"){
    $bulan ="Juni";
}
else if($bulan == "07"){
    $bulan ="Juli";
}
else if($bulan == "08"){
    $bulan ="Agustus";
}
else if($bulan == "09"){
    $bulan ="September";
}
else if($bulan == "10"){
    $bulan ="Oktober";
}
else if($bulan == "11"){
    $bulan ="November";
}
else{
    $bulan="Desember";
}


$tanggal_lahir = $tanggal."-".$bulan."-".$tahun;


         echo "No Golongan : ".$no_gol."<br>Tanggal Lahir : ".$tanggal_lahir."<br> No Urut : ".$no_urut;

}

}
?>

    </div>
</div>
</body>
</html>

