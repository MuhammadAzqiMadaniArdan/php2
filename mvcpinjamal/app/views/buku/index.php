<div class="container">

    <h3 class="mb-3">Daftar Buku</h3>
    <div class="d-flex justify-content-between">
        <div>
            <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Buku</a>

        </div>
        <div class="d-flex">
            <form action="<?= BASE_URL; ?>/buku/cari" method="post" class="d-flex">

                <input type="text" name="search" class="form-control" id="" placeholder="cari buku...">
                <button type="submit" class="btn btn-success">Cari</button>

            </form>
            <a href="<?= BASE_URL; ?>/buku/index" class="btn btn-secondary">Reset</a>

        </div>
    </div>
    <br>
    <br>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama_peminjam</th>
                <th scope="col">jenis_barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['buku'] as $row) : ?>
                <tr>

                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?>
                    <td><?= $row['jenis_barang']; ?>
                    <td><?= $row['no_barang']; ?>
                    <td><?= $row['tgl_pinjam']; ?>
                    <td><?= $row['tgl_kembali']; ?> </td>
                    <td>
                    <?php
                    if($row['tgl_kembali'] > $row['tgl_pinjam']){
                       echo "Belum Kembali";
                    ?>
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>/buku/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    <?php }?>
                    <?php
                     if($row['tgl_kembali'] <= $row['tgl_pinjam']){
                        echo "Sudah Kembali";
                        ?>
                        <td>
                        <a href="<?= BASE_URL ?>/buku/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                    <?php }
                    ?>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>