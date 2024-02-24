<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register ke Aplikasi Perpustakaan</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-image: url('assets/image/foto_perpus.jpeg');
            background-size: cover;
        }
    </style>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Apliksi Perpustakaan</h3></div>
                                    <div class="card-body">
                                    <?php
                                            if(isset($_POST['register'])) {
                                            $nama= $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                            $level = $_POST['level'];

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");
                                            
                                            if($insert){
                                                echo '<script>alert("Selamat,register berhasil.Silahkan Login"); location.href="login.php"</script>';
                                            }else{
                                                echo '<script>alert("Register gagal, Silahkan ulangi kembali");</script>';
                                            }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control py-4" type="text" required name="nama" placeholder="Masukkan nama lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4" type="text" required name="email" placeholder="Masukkan email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">No Telepon</label>
                                                <input class="form-control py-4" type="text" required name="no_telepon" placeholder="Masukkan no.telepon" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="4" required class="form-control py-4"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4" type="username" required name="username" placeholder="Masukkan username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" id="InputPassword" type="password" name="password" required name="password" placeholder="Masukkan password"/>
                                            </div>
                                            <div class="form-group">
                                            <label class="small mb-1">Level</label>
                                            <select name="level" required class="form-control py-4">
                                                <option value="peminjam">Peminjam</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger"  href="login.php">login</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>



