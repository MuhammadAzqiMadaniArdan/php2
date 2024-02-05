<div class="container">

    <h3 class="mb-3">Daftar Peminjaman</h3>
    <div class="d-flex justify-content-between">
        <div>
            <a href="<?= BASE_URL; ?>alat/tambah" class="btn btn-primary">Tambah Peminjaman</a>

        </div>
        <div class="d-flex">
            <form action="<?= BASE_URL; ?>alat/cari" method="post" class="d-flex">

                <input type="text" name="search" class="form-control" id="" placeholder="cari peminjaman...">
                <button type="submit" class="btn btn-success">Cari</button>
    
            </form>
            <a href="<?= BASE_URL; ?>alat/index" class="btn btn-secondary" style="margin-left:10px;">Reset</a>

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
            <?php foreach ($data['alat'] as $row) : ?>
                <tr>

                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?>
                    <td><?= $row['jenis_barang']; ?>
                    <td><?= $row['no_barang']; ?>
                    <td><?= $row['tgl_pinjam']; ?>
                    <td><?= $row['tgl_kembali']; ?> </td>
                    <td>
                        <?php
                        if ($row['tgl_kembali'] > $row['tgl_pinjam']) {
                        ?>
                            <button disabled="disabled" class="btn btn-danger" style="background-color:red;">Belum Kembali</button>
                            
                    </td>
                    <td>
                        <a href="<?= BASE_URL ?>alat/edit/<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>alat/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php } ?>
                <?php
                if ($row['tgl_kembali'] <= $row['tgl_pinjam']) {
                ?>
                    <button disabled="disabled" class="btn btn-primary" style="background-color:green;">Sudah Kembali</button>

                    <td>
                        <a href="<?= BASE_URL ?>alat/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                    </td>
                <?php }
                ?>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>