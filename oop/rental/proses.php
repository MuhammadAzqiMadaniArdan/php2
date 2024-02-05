<?php
class Motor {
    public $namaPelanggan ;
    protected $pajak,$member=['baba','babe','babo','babu'];
    private $yamaha,
            $honda,
            $vario,
            $suzuki;
    public $jumlah;
    public $jenis;

    function __construct() {
        $this->pajak = 10000;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->yamaha = $tipe1;
        $this->honda = $tipe2;
        $this->vario = $tipe3;
        $this->suzuki = $tipe4;
    }

    public function getHarga() {
        $data["yamaha"] = $this->yamaha;
        $data["honda"] = $this->honda;
        $data["vario"] = $this->vario;
        $data["suzuki"] = $this->suzuki;
        return $data;
    }
    
}

class Beli extends Motor {

    public function hargaMember(){
        $dataHarga = $this->getHarga();
        $hargaBeli = $dataHarga[$this->jenis];
        $hargaTotal = $hargaBeli * $this->jumlah;

       
        if(in_array($this->namaPelanggan,$this->member)){
            $hargaDiskon =
            $hargaTotal * 0.05;
            $hargaMember =$hargaTotal - $hargaDiskon + $this->pajak;
            return $hargaMember;    
        }
        else{
            $hargaBayar = $hargaTotal +
            $this->pajak;
        return $hargaBayar;
        }
    }
    public function cetakPembelian() {  
        echo "<center>";
        echo "----------------------------------------------" . "<br>";
        echo "Nama Anda : " . $this->namaPelanggan . "<br>";
        if(in_array($this->namaPelanggan,$this->member)){
            echo "Member Anda Mendapatkan Diskon: " . "5%". "<br>";}
        echo "Anda meminjam motor dengan tipe : " . $this->jenis . "<br>";
        echo "Dengan Lama : " . $this->jumlah . " Hari <br>";
        echo "Dengan Harga Perhari : " .number_format($this->getHarga()[$this->jenis], 0, '', '.').  " Hari <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this->hargaMember(), 0, '', '.') . "<br>";
        echo "----------------------------------------------";
        echo "</center>";
    }
}
?>


