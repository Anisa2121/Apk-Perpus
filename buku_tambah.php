<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
                if (isset($_POST['submit'])){
                    $id_kategori = $_POST['id_kategori'];
                    $judul = $_POST['judul'];
                    $Foto = $_POST['foto'];
                    $penulis = $_POST['penulis'];
                    $penerbit= $_POST['penerbit'];
                    $stok = $_POST['stok'];
                    $tahun_terbit = $_POST['tahun_terbit'];
                    $deskripsi = $_POST['deskripsi'];
                    $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,foto,penulis,stok,penerbit,tahun_terbit,deskripsi) values ('$id_kategori','$judul','$Foto','$penulis','$stok','$penerbit','$tahun_terbit','$deskripsi')");

                    if($query) {
                        echo '<script>alert("Tambah data berhasil."); location.href="?page=buku";</script>';
                    }else{
                        echo  '<script>alert("Tambah data gagal.")</script>';
                    }
                }
        
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Kategori</div>
                <div class="col-md-8">
                    <select name="id_kategori" class="form-control">
                        <?php
                            $kat =mysqli_query($koneksi, "SELECT*FROM kategori");
                            while($kategori = mysqli_fetch_array($kat)){
                        ?>
                        <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori'];?></option>
                        <?php
                            }
                        ?>
                    </select>
            </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Judul</div>
                <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Foto</div>
                <div class="col-md-8"><input type="file" class="form-control" name="foto"></div>
            </div>

            <div class="row mb-3">
                <div class="col-md-2">Penulis</div>
                <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>
                <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Stok</div>
                <div class="col-md-8"><input type="text" class="form-control" name="stok"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>
                <div class="col-md-8"><input type="number" class="form-control" name="tahun_terbit"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Deskripsi</div>
                <div class="col-md-8">
                <textarea name="deskripsi" rows="5" class="form-control"></textarea>
            
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="?page=buku" class="btn btn-danger">Kembali</a>
        </div>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>