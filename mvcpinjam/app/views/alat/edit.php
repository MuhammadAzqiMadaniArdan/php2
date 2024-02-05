<div class="container">
    <h3 class="mb-3">Edit Peminjaman : <?= $data['alat']['nama_peminjam'] ?></h3>
    <form action="<?= BASE_URL; ?>alat/updateAlat" method="post">
    <div class="class-body">
        <input type="hidden" name="id" value="<?= $data['alat']['id']; ?>">
        <div class="form-group mb-3">
            <label for="nama_peminjam">nama_peminjam</label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?= $data['alat']['nama_peminjam'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">jenis_barang</label>
            <select name="jenis_barang" class="form-control" id="jenis_barang" required>
                            <option value="Laptop">Laptop</option>
                            <option value="HP">HP</option>
                            <option value="Adaptor LAN">Adaptor LAN</option>
                        </select>
        </div>
        <div class="form-group mb-3">
            <label for="no_barang">Nomor Barang</label>
            <input type="number" class="form-control" id="no_barang" name="no_barang" value="<?= $data['alat']['no_barang'] ?>">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_pinjam">Tanggal pinjam</label>
            <select name="tgl_pinjam" class="form-control"  required>
                <option type="datetime-local" class="form-control"  required value="<?= $data['alat']['tgl_pinjam'] ?>"><?= $data['alat']['tgl_pinjam'] ?></option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="tgl_kembali">Tanggal kembali</label>
            <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['alat']['tgl_kembali'] ?>">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
    </div>
</form>
</div>
<!-- 
PERJUANGAN 
// $tanggalAwal = date("Y-m-d H:i:s",strtotime($_POST['tgl_pinjam']));
// $tanggalAkhir= date("Y-m-d H:i:s",strtotime($_POST['tgl_kembali']));
// print_r($data['alat']['tgl_kembali']);
// if(isset($_POST['kirim'])){
// if($data['alat']['tgl_kembali'] > $data['alat']['tgl_pinjam']){
//     header('location: '.BASE_URL. 'alat/edit');
//     echo "PPP";
// }
// else{
//     header('location: '.BASE_URL. 'alat/edit');
// }
// }
    

// if (isset($_POST['kirim'])) {
//     $tgl_pinjam = strtotime($_POST['tgl_pinjam']);
//     $tgl_kembali = strtotime($_POST['tgl_kembali']);
    
//     if ($tgl_kembali > $tgl_pinjam) {
//         // Tanggal kembali lebih besar, simpan perubahan
//         header('location: '.BASE_URL. 'alat/updateAlat');
//     } else {
//         // Tanggal kembali tidak lebih besar, tetap di halaman edit
//         echo "Tanggal kembali harus lebih besar dari tanggal pinjam.";
//     }
// }
// Tambahkan kode untuk menampilkan pesan kesalahan jika diperlukan
 







 -->
