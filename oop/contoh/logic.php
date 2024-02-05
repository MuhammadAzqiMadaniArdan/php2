<?php


// sediakan kotak pembungkus yang akan digunakan (sesuai dengann fitur)
class DataBahanBakar {

private $HargaSSuper;
private $HargaSVPower;
private $HargaSVPowerDiesel;
private $HargaSVPowerNitro;
// attribut harga-harga dibuat private karena sudah ada getter yang akan menampilkan data tanpa memanggil atribut dini diluar
public $jenisYangDipilih;
public $SemuaDataSolar;
public $totalLiter;
// attribut diatas diset public karena nilainya akan diisi dari luar
protected $totalPembayaran;
// set protected karena hanya akan digunakan oleh class dia dan turunan untuk proses data,tidak akan dipanggil diluar
public function setHarga(
    $valSSuper,$valSVPower,$valSVPowerDiesel,$valSVPowerNitro
){
    // mengisi nilai ke atribut,nilai nantinya diisi dari luar class melalui fungsi setter ini
    // nilai dari luar diambil ke dalam class melalui parameter (variabel yang ada di dalam kurung),nilai dari luar tersebut disimpan ke attribut yang sudah tersedia ($this->)
    // penamaan parameter bebas asal urutan pengisian dari luarnya sesuai
    $this->HargaSSuper = $valSSuper;
    $this->HargaSVPower = $valSVPower;
    $this->HargaSVPowerDiesel = $valSVPowerDiesel;
    $this->HargaSVPowerNitro = $valSVPowerNitro;
}

public function getHarga(){
     // setelah nilai dari atribut disimpan ,fungsi getter akan mengembalikan ?menampilkan nya untuk digunakan di tempat lain
    //  karena data yang akan dikirim dan dikeluarkan lebih dari satu, maka data data tersebut disatukan terlebih dahulu
     
$semuaDataSolar['SSuper'] = $this->HargaSSuper;
$semuaDataSolar['SVPower'] = $this->HargaSVPower;
$semuaDataSolar['SVPowerDiesel'] = $this->HargaSVPowerDiesel;
$semuaDataSolar['SVPowerNitro'] = $this->HargaSVPowerNitro;
// tujuan utama dari getter : return
return $semuaDataSolar;
}

}

class Pembelian extends DataBahanBakar{
// data sudah disediakan tinggal proses perhitungan jumlah pembelian
public function totalHarga(){
$this->totalPembayaran =$this ->getHarga()
[$this->jenisYangDipilih]*
$this->totalLiter;
}

public function cetakBukti(){
    echo "------------------------";
    echo "Jenis Bahan Bakar : ".
    $this->jenisYangDipilih;
    echo "Total Liter : ".
    $this->totalLiter;
    echo "Harga Bayar : Rp. ".
    number_format($this->totalPembayaran,0,',','.');
    echo "------------------------";
}

}

?>