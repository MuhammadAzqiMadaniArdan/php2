<?php

$nilai = [80,78,72,84,92,88];

$nilai2 = $nilai;
//arr menjadi string
$nilaiString = implode(',',$nilai);
echo "Nilai Saya: ".$nilaiString. "<br>";

//nilai terbesar
$nilaiMax =max($nilai);
echo "Nilai Terbesar : ".$nilaiMax . "<br>";

//nilai terkecil
$nilaiMin = min($nilai);
echo "Nilai Terkecil : ".$nilaiMin . "<br>";

//urut dari terkecil
sort($nilai2);
echo "Urutan dari yang terkecil: ".implode(',',$nilai2)."<br>";

//urut dari terbesar
rsort($nilai2);
echo "Urutan dari yang terbesar: ".implode(',',$nilai2)."<br>";


//menghitung rata-rata
$rata= array_sum($nilai)/ count($nilai);
$bulat = round($rata);
echo "Nilai Rata : ".$bulat . "<br>";



// // $nilai[2] = 75;
// echo "Saya melakukan perbaikan untuk nilai ".$nilaiMin . " Saya mendapat nilai : ".$nilai[2]." Jadi Nilai Saya Sekarang ".implode(',',$nilai)."<br>";

$key = array_search(72,$nilai);
if ($key !== false ){
    $nilai[$key] = 75;
    echo "Saya melakukan perbaikan untuk nilai ".$nilaiMin . " Saya mendapat nilai : ".$nilai[$key]." Jadi Nilai Saya Sekarang ".implode(',',$nilai)."<br>";

}

// $nilai = array_map(function($value) {
//     return ($value == 72) ? 75 : $value;}, $nilai);
    
//     echo "Saya melakukan perbaikan untuk nilai ".$nilaiMin . " Saya mendapat nilai : "."75"." Jadi Nilai Saya Sekarang ".implode(',',$nilai)."<br>";

//mencari dalam array (var,index,jumlah item yang diambil,nilai)
// array_slice($nilai,$key1, 1,75);

// if($nilai[2] == 72){
//     $nilai[2] = 75;
//     echo "Saya melakukan perbaikan untuk nilai ".$nilaiMin . " Saya mendapat nilai : ".$nilai[2]." Jadi Nilai Saya Sekarang ".implode(',',$nilai)."<br>";


// }

rsort($nilai);
echo "Sekarang Urutan Nilai Terbesar : ".implode(',',$nilai);
?>