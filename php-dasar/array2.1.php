<?php

    $listfilm = [
        [
            "judul" => "miracle in cell no. 7",
            "min-usia" => 15,
            "harga" => 45000
        ],
        [
            "judul" => "the invitation",
            "min-usia" => 17,
            "harga" => 35000
        ],
        [
            "judul" => "luck",
            "min-usia" => 7,
            "harga" => 35000
        ]
    ];

?>
<center>
<form action="" method="post">
    <table>
        <tr>
            <td>Usia</td>
            <td><input type="number" name="usia"></td>
        </tr>
        <tr>
            <td>Film</td>
            <td>
                <select name="judul">
                    <!-- hidden : menyembunyikan opsi ini dari list select, disable : gabisa dipilih , selected : awal dibuka, opsi ini yang muncul di select -->
                    <option hidden disabled selected>==> Pilih Film <==</option>
                    <?php 
                    foreach ($listfilm as $key => $film) {
                    ?>
                    <!-- value di option : data yang di ambil sistem ketika opsi dipilih, ambil $key agar yang diambil sistem index dari arr nya bukan nama film. kenapa? agar nanti mengambil property lain dari arr nya gampang, ga harus ribet cari index dulu dari si judulnya. yang dipertengahan tag mengambil property judul karena agar yang dilihat user diopsinya itu judul bukan angka index -->
                    <!-- simbil php yang di value itu artinya tah php echo -->
                    <option value="<?= $key ?>"><?= $film["judul"]?></option>
                    <!-- kenapa buat tanda kurung doang disimpen di tag php? karena tanda penutup kurung ini penutup dari foreach yang dibuat pake php -->
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <!-- tadi kosong karena di tr atasnya ada 2 td, biar sama dan sejajar ada 2 td di tr ini juga -->
            <td></td>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </table>
</form>
<?php

    if (isset($_POST["simpan"])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];
        //karena tadi select nya uda nyimpen value berupa key (index) dari judul yang dipilih, jadi buat ambil property min-usia atau harga dari arr yang sesuai dengan judul dipilih, tinggal ambil dari arr listFilm index ke sesuai $_POST['judul'] terus ambil yang property min-usia/harga
        $minUsia = $listfilm[$filmId]["min-usia"];
        $harga = $listfilm[$filmId]["harga"];

        if ($usia >= $minUsia) {
            //number _format mengubah format int ke rupiah, $harga var int nya, 2 jumlah nol yang mau ditambahkan dibelakang ( , ) tanda permisah 2 nol tersebut, ( . ) tanda pemisah per tiga angka
            echo "<h2 style='color: salmon;'>silahkan untuk membayar sebesar Rp. ".number_format($harga, 2, ',', '.' )."</h2>";
        } else {
            echo "<h2 style='color: red;'>Usia anda belum cukup!</h2>";
        }
    }

?>
</center>