<?php

$siswas = [
    [
        'nama' => 'Fema',
        'nis' => 11907154,
        'rombel' => 'PPLG XI-2',
        'rayon' => 'Cicurug 3',
        'umur' => 18,
    ],

    [
        'nama' => 'Putri',
        'nis' => 11907155,
        'rombel' => 'PPLG XI-2',
        'rayon' => 'Ciawi 1',
        'umur' => 16,
    ],

    [
        'nama' => 'Putra',
        'nis' => 11907156,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'Sukasari 2',
        'umur' => 17,
    ],

    [
        'nama' => 'Arta',
        'nis' => 11907157,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'Wikrama 4',
        'umur' => 17,
    ]

    ];
?>

<!-- data yang memiliki umur lebih dari sama dengan 17 -->
<!-- Menampilkan data dari pencarian nama -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="pilih-usia">
            <h1>Data Siswa </h1>
            <form class="forum" action="" method="post">
                <tr>
                    <td>
                        <a href="?show=1" >Cari yang berusia lebih dari 17 tahun</a>
                    </td>
                    <br>
                    <br>
                    <td>
                        <label for="">Cari berdasarkan Nama: </label>
                        <input type="text" name="search">
                    </td>
                    <td>
                        <button type="submit" name="submit">Submit</button>
                    </td>
                </tr>
            </form>

</html>
<?php
    // $post disamakan dengan atribut name
   if(isset($_GET['show'])){
    foreach ($siswas as $siswa) {
        if($siswa['umur'] >= 17){
           echo "<br>".$siswa['nama']." ".$siswa['umur']." "."tahun";
        }
    }

   }

if (isset($_POST['submit'])) {

    // $post disamakan dengan atribut name
    $search = $_POST['search'];

    foreach ($siswas as $siswa) {

        if (strtolower($search )== strtolower($siswa['nama'])) {
                echo "<br>"."<h2>Data Siswa</h2>"."Nama : ".$siswa["nama"]."<br>".
                "NIS : ".$siswa['nis']."<br>".
                "Rombel : ".$siswa['rombel']."<br>".
                "Rayon : ".$siswa['rayon']."<br>".
                "Umur : ".$siswa['umur'] ;
                break;
        }
    };

}


?>