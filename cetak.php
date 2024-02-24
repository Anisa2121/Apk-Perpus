<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Tanggal Peminjaman</th> 
            </tr>
            <?php
            include "koneksi.php";
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM peminjam LEFT jOIN user on peminjam.id_user = peminjam.id_user LEFT jOIN buku on buku.id_buku = peminjam.id_buku");
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>

                    <td><?php echo $i++;?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['judul']; ?></td>
                    <td><?php echo $data['tanggal_peminjam']; ?></td>
                    <td><?php echo $data['tanggal_pengembalian']; ?></td>
                    <td><?php echo $data['tanggal_peminjam']; ?></td>
                    <td>
            </td>
            </tr>
                <?php
            }
            ?>
        </table>
        <script>
            window.print();
            setTimeout(function(){
                window.close();
            },100);
        </script>