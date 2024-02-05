<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Kuy</title>
</head>
<body>
    <center>
        <table style="background-image:linear-gradient(red,orange);width: 30%;padding:3% 3%;margin:2% 2%;border-radius: 50px;">
            <h1>Kuy Rental Motor!</h1>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan: </td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (perhari):</td>
                    <td>
                        <input type="number" name="rental" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Motor:</td>
                    <td>
                        <select name="jenis" required>
                            <option value="yamaha">Yamaha Asoy</option>
                            <option value="honda">Honda cuy</option>
                            <option value="vario">Vario bre</option>
                            <option value="suzuki">Suzu ki</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Beli" name="kirim"></td>
                </tr>
            </form>
        </table>
        <div class="card" style="background-image:linear-gradient(orange,yellow);width: 30%;padding:2% 2%;margin:2% 2%;border-radius: 50px;">
            <h2>Member Rental</h2>
                <li>baba</li>
                <li>babe</li>
                <li>babu</li>
                <li>babo</li>
        </div>
        <div class="card" style="background-image:linear-gradient(yellow,aqua);width: 30%;padding:2% 2%;margin:2% 2%;border-radius: 50px;">
        <h2>Hasilnya: </h2>
<?php
include 'proses.php';
$proses = new Beli();
$proses->setHarga(70000, 80000, 90000, 60000);
if (isset($_POST['kirim'])) {
    $proses->namaPelanggan= strtolower($_POST['nama']);
    $proses->jumlah = $_POST['rental'];
    $proses->jenis = $_POST['jenis'];
    $proses->cetakPembelian();
    $proses->hargaMember();
}
?>
        </div>
    </center>
</body>
</html>