<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM peminjam WHERE id_peminjam=$id");
?>
<script>
    alert('Hapus anda berhasil');
    location.href = "index.php?page=ulasan";
</script>