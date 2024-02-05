<?php
$menus = [
    [
        'menu' => 'Nasi Noreng',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Mie Goreng',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'kwetiaw',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Es Jeruk',
        'harga' => 5000,
        'tipe' => 'minuman',
    ],
    [
        'menu' => 'Teh Manis',
        'harga' => 5000,
        'tipe' => 'minuman',
    ],
]
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 5px 5px;
    }

    .content {
        display: flex;
        justify-content: center;
    }

    .daftar-menu {
        border-radius: 50px;
        background: linear-gradient(aqua, blue);
        width: 70%;
        height: 65%;
        padding: 30px 20px;
        color: white;
        font-size: large;


    }

    .align {
        font-size: 100%;
        display: flex;
        justify-content: center;
    }


    .pilih-menu {
        border-radius: 50px;
        background: linear-gradient(aqua, blue);
        width: 80%;
        height: 100%;
        padding: 30px 20px;
        color: white;
        font-size: large;
        margin: 5% 0%;
    }

    .forum input {
        width: 100%;
        border-radius: 500px;
        border-color: whitesmoke;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .forum select {
        text-align: center;
        font-size: medium;
        width: 10%;
        border-radius: 500px;
        border-color: whitesmoke;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    h2 {
        color: white;
        font-weight: bolder;
        text-align: center;
    }

    h1 {
        margin-top: 2%;
        color: blue;
        box-shadow: darkblue;

        text-align: center;
    }

    .forum label {
        color: white;
        font-size: 20px;
    }

    .content2 {
        display: flex;
        justify-content: center;
    }

    button {
        margin: 10px;
        background: linear-gradient(darkorange, yellow);
        padding: 8px 20px;
        border-radius: 50px;
        border-color: orange;
        font-weight: bolder;
    }

    .content3 {
        display: flex;
        justify-content: center;
    }

    .hasil {
        text-align: center;
        border-radius: 50px;
        background: linear-gradient(aqua, blue);
        width: 80%;
        height: 100%;
        padding: 30px 20px;
        color: white;
        font-size: large;
        margin: 4% 0%;
    }
</style>

<body>

    <h1>Azkuy!</h1>
    <div class="content">
        <div class="daftar-menu">
            <h2>Daftar Menu</h2>
            <div class="align">
                <ol>
                    <?php
                    foreach ($menus as $key => $item) {
                    ?>
                        <li>

                            <p>Menu: <?= $item["menu"] . "<br>" . "Harga: " .  $item["harga"] ?> </p>

                        </li>
                    <?php
                    };
                    ?>
                </ol>
            </div>
        </div>
    </div>
    <div class="content2">
        <div class="pilih-menu">
            <form class="forum" action="" method="post">
                <tr>
                    <label for="">Pilih Makanan : </label>
                    <td>
                        <select name="makan" id="">
                            <!-- disable digunakan agar teks option tidak bisa di klik -->
                            <option hidden disabled selected>Pilih</option>
                            <?php
                            foreach ($menus as $key => $menu) {
                                if ($menu['tipe'] == "makanan") {
                            ?>
                                    <option value="<?= $key ?>">
                                        <?= $menu["menu"] ?>
                                    </option>
                            <?php
                                }
                            };
                            ?>
                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>Jumlah Pembelian Makanan: </td>
                    <td><input type="number" name="jumlah-makanan"></td>
                </tr>
                <br>
                <tr>
                    <td>Pilih Minuman : </td>
                    <td>
                        <select name="minum" id="">
                            <option hidden disabled selected>Pilih</option>

                            <?php
                            foreach ($menus as $key => $menu) {
                                if ($menu['tipe'] == "minuman") {
                            ?>
                                    <option value="<?= $key ?>">
                                        <?= $menu["menu"] ?>
                                    </option>
                            <?php
                                }
                            };
                            ?>

                        </select>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>Jumlah Pembelian minuman</td>
                    <td><input type="number" name="jumlah-minuman"></td>
                </tr>
                <tr>
                    <button type="submit" name="simpan" value="Simpan">Simpan</button>
                </tr>
            </form>
        </div>
    </div>
    <div class="content3">
        <div class="hasil">
            <h2>Hasilnya :</h2>
            <?php

            if (isset($_POST['simpan'])) {

                // $post disamakan dengan atribut name
                $pesanMakan = $_POST['jumlah-makanan'];
                $pesanMinum = $_POST['jumlah-minuman'];

                $makanan = $_POST['makan'];
                $minuman = $_POST['minum'];

                $pilihMakanan = $menus[$makanan]['menu'];
                $pilihMinuman = $menus[$minuman]['menu'];

                $harga_makanan = $menus[$makanan]['harga'];
                $harga_minuman = $menus[$minuman]['harga'];

                $jumlah_makanan = 0;
                $jumlah_minuman = 0;
                $diskon = 0;

                echo "Makanan : " . $pilihMakanan . "($pesanMakan)" . "<br>";
                echo "Minuman : " . $pilihMinuman . "($pesanMinum)" . "<br>";



                if ($pesanMakan == 1) {
                    echo "<p style=''>Silahkan untuk membayar sebesar Rp. " . number_format($harga_makanan, 2, ',', '.') . "</p>";
                } else {
                    for ($i = 0; $i < $pesanMakan; $i++) {

                        $jumlah_makanan += $harga_makanan;
                    }
                    echo "<p style=''>Silahkan untuk membayar sebesar Rp. " . number_format($jumlah_makanan, 2, ',', '.') . "</p>";
                }
                if ($pesanMinum == 1) {
                    echo "<p style=''>Silahkan untuk membayar sebesar Rp. " . number_format($harga_minuman, 2, ',', '.') . "</p>";
                } else {
                    for ($i = 0; $i < $pesanMinum; $i++) {
                        $jumlah_minuman += $harga_minuman;
                    }
                    echo "<p style=''>Silahkan untuk membayar sebesar Rp. " . number_format($jumlah_minuman, 2, ',', '.') . "</p>";
                }
                $jumlah = $jumlah_makanan + $jumlah_minuman;

                echo "Diskon yang didapat :" . $diskon . "%" . "<br>";
                echo "Total Pembayaran : " . number_format($jumlah, 2, ',', '.');
            }

            ?>
        </div>
    </div>
</body>

</html>