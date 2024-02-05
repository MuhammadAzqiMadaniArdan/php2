<?php
$rata;
$nama=[];$hadir=[];
$mtk=[];$agama=[];$nilai=[];
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
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan Nama : </label>
                <input type="text" name="nama[]" id="name">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan Kehadiran : </label>
                <input type="number" name="hadir[]" id="hadir">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan mtk : </label>
                <input type="number" name="mtk[]" id="mtk">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan indo : </label>
                <input type="number" name="indo[]" id="indo">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan ingg : </label>
                <input type="number" name="ingg[]" id="ingg">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan dpk : </label>
                <input type="number" name="dpk[]" id="dpk">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan agama : </label>
                <input type="number" name="agama[]" id="agama">
            </div>
            
        </div>
        <!-- attribut yang memiliki kata depan "on" disebut dengan event yang valuenya berisi script (baris js) -->
        <p style="cursor:pointer;color:blue" onclick="tambahInput()">Tambah Input Form</p>
        <!--mememnggil tambah input  yakni function-->
        <button type="submit" name="submit">Kirim</button>
    </form>
    <script>
        let data = 1;
        function tambahInput (){
            if(data <= 15 ){ 
            // let variabel yang bis a berubah value
            // const variabel tetap
            // backtip{``} digunakan untuk pembuatan string yg tidak satu baris : bisa dipakai di php juga
        let data_siswa = `
        <br>
        
        <div class="two" style="display: flex;">
                <label for="">Masukkan Nama : </label>
                <input type="text" name="nama[]" id="name">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan Kehadiran : </label>
                <input type="number" name="hadir[]" id="hadir">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan mtk : </label>
                <input type="number" name="mtk[]" id="mtk">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan indo : </label>
                <input type="number" name="indo[]" id="indo">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan ingg : </label>
                <input type="number" name="ingg[]" id="ingg">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan dpk : </label>
                <input type="number" name="dpk[]" id="dpk">
            </div>
            <div class="one" style="display: flex;">
                <label for="">Masukkan agama : </label>
                <input type="number" name="agama[]" id="agama">
            </div>
            <br>
           
            `
            ;
        
            data += 1;
            //document = pengambil alih baris kode html
            //getElementById diganakan untuk mengambil id dari html
            // innerHTML : menambahkan tag html baru
            //appendChild menambahkan element/tag baru pada bagian bawah (sebelum menutup)
                document.getElementById('wrap') .innerHTML += data_siswa;
            }
        }
 </script>
    <!-- prosess -->
    <?php
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $hadir=$_POST['hadir'];
        $mtk=$_POST['mtk'];
        $indo=$_POST['indo'];
        $ingg=$_POST['ingg'];
        $dpk=$_POST['dpk'];
        $agama=$_POST['agama'];
        $nilai_akhir=[];
        $banyakNama = count($nama);
        $rata;
        // $rata = array_sum($nilai);
        for ($i = 1; $i < count($nama); $i++) {

            $rata= ($mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i]);

            if ($rata>= 475 && $hadir[$i] == 100) {
                $juara = "Anda Juaranya";
            }
            else{
                $juara ="tidak ada juara";
            }
            $nilai_akhir[] = [
                'nama' => $nama[$i],
                'rata_rata' => $rata,
                'kehadiran' => $hadir[$i],
                'juara_kelas' => $juara
              ];
        }
    
          if (!empty($nilai_akhir)) {
            foreach ($nilai_akhir as $data_akhir) {
              echo "Nama: " . $data_akhir['nama'] . "<br>";
              echo "Rata-rata: " . $data_akhir['rata_rata'] . "<br>";
              echo "Kehadiran: " . $data_akhir['kehadiran'] . "% <br>";
              echo "==================";
              echo "<br>";
            }
          }
          if (!empty($nilai_akhir)) {
            echo "Berikut Juaranya: ";
            $juaraNama = [];
        
            foreach ($nilai_akhir as $data_akhir) {
              if ($data_akhir['juara_kelas'] == "Anda Juaranya") {
                $juaraNama[] = $data_akhir['nama'];
              }
            }
        
            if (!empty($juaraNama)) {
              echo implode(', ', $juaraNama);
            } else {
              echo "-";
            }
          }
        
    }
    
    ?>
</body>

</html>