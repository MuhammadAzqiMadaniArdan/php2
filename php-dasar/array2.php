<?php

$listFilm= [
    [
        "judul" => "miracle in cell no.7",
        "min-usia" => 15,
        "harga" => 45000
    ],
    [
        "judul" => "The invitation",
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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table>
    <form action="" method="post">
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia"></td>
            </tr>
            <tr>
                <td>Film</td>
                <td>
                    <select name="judul" id="">
                        <option hidden disabled selected>--pilih film</option>

                        <?php
                        foreach ($listFilm as $key => $film) {
                        ?>

                            <option value="<?= $key ?>"> <?= $film["judul"] ?></option>

                        <?php

                        };
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <button type="submit" name="simpan" value="Simpan">Simpan</button>
            </tr>
        </form>
    </table>
    <?php

    if (isset($_POST['simpan'])) {

        // $post disamakan dengan atribut name
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];
        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if($usia >= $minUsia){
            echo "<h2 style='color : green'>Silahkan untuk membayar sebesar Rp. ".number_format($harga,2,',','.')."</h2>";
        }

        else{
            echo "<h2 style='color : red'>Usia belum cukup </h2> ";
        }

    }
    ?>
    </center>
</body>

</html>