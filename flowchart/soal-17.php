<?php
$arrAngka = [];
$nilaiTerbesar;
$nilaiTerkecil;
$rata;
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
        <div id="wrap">
            <div class="one" style="display: flex;">
                <label for="">Masukkan Angka : </label>
                <!-- name dengan tanda [] berarti bahwa semua input dengan name yang sama, value nya akn diambil sama dan disimpan dalam bentuk array  -->
                <!-- jika tidak meemakai tanda [] maka variabel kedua akan mengambil variabel terakhir atau menimpa variabel terakhir yang diinput -->
                <input type="number" name="angka[]" id="angka">
            </div>
        </div>
        <!-- attribut yang memiliki kata depan "on" disebut dengan event yang valuenya berisi script (baris js) -->
        <p style="cursor:pointer;color:blue" onclick="tambahInput()">Tambah Input Form</p>
        <!--mememnggil tambah input  yakni function-->
        <button type="submit" name="submit">Kirim</button>
    </form>
    <script>
        let jumlahInput = 1;
        function tambahInput (){
            // let variabel yang bis a berubah value
            // const variabel tetap
            // backtip{``} digunakan untuk pembuatan string yg tidak satu baris : bisa dipakai di php juga
        let inputElement = `
        <div class="two" style="display: flex;">
                <label for="">Masukkan Angka : </label>
                <input type="number" name="angka[]" id="angka">
            </div>`;
            jumlahInput += 1;
            //document = pengambil alih baris kode html
            //getElementById diganakan untuk mengambil id dari html
            // innerHTML : menambahkan tag html baru
            //appendChild menambahkan element/tag baru pada bagian bawah (sebelum menutup)
            if(jumlahInput < 10 ){
            document.getElementById('wrap') .innerHTML += inputElement;
            }
        }
    </script>
    <!-- prosess -->
    <?php
    if(isset($_POST['submit'])){
        // mengisi arrAngka dengan seluruh value dari inpput yang memiliki name angka
        $arrAngka=$_POST['angka'];
        $nilaiTerbesar= max($arrAngka);
        $nilaiTerkecil= min($arrAngka);
        $rata=array_sum($arrAngka)/count($arrAngka);
        // array_sum: seluruh item arr dijumlahkan, count : menghitung jumlah item yang terdapat pada array
        echo "Nilai Terbesar : ". $nilaiTerbesar . "<br>Nilai Terkecil : ".$nilaiTerkecil."<br> Rata-rata : ".$rata;
    }
    ?>
</body>

</html>