<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=peminjaman_tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
        <table class="table table-bordered" id="dataTable" widht="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Foto</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
                
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjam LEFT jOIN user on user.id_user = peminjam.id_user LEFT jOIN buku on buku.id_buku = peminjam.id_buku WHERE peminjam.id_user=" . $_SESSION['user']['id_user']);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>

                    <td><?php echo $i++;?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><img  width="100px" src="assets/img/ <?php echo $data['foto']; ?>"></td>
                    <td><?php echo $data['tanggal_peminjam']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['status_peminjam']; ?></td>
                    <td>
                        <?php
                        if($data['status_peminjam'] !='dikembalikan'){
                        ?>
                   
                        <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjam']; ?>" class="btn btn-danger">Ubah</a>
                        <a onclick="return confirm('apakah data akan dihapus');" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjam']; ?>" class="btn btn-danger">Hapus</a>
                    <?php
                }
                ?>
            </td>
            </td>
            </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>