<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Lapstore Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="card-body col-md-4 mx-auto mv-auto" style="background-color: #FAF6F6; margin-top : 20vh; border-radius:20px; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
        <center>
            <h5 class="text-primary mt-5" style="padding-top: 2rem ;">Daftar </h5>
        </center>
        <form action="" method="POST">
            <div class="col-md-6 mx-auto mb-3">
                <input type="text" class="form-control" name="username" placeholder="Masukan Username" required>
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <input type="email" class="form-control" name="email" placeholder="Masukan Email" required>
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <input type="number" class="form-control" name="no_hp" placeholder="Masukan No HP" required>
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <input type="password" class="form-control" name="kata_sandi" placeholder="Masukan Kata Sandi" required>
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <input type="password" class="form-control" name="konfirmasi-kata-sandi" placeholder="Konfirmasi Kata Sandi" required>
            </div>
            <center>
                <button id="noedit" type="submit" class="btn btn-primary " name="daftar">Daftar</button>
            </center>
            <center style="padding-bottom: 2rem; margin :auto;">
                <small class="pull-right pb-5">Sudah Daftar? <a href="login.php">Masuk</a></small>
            </center>
        </form>
    </div>
    <?php
        include "koneksi.php";

        if (isset($_POST['daftar'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $no_hp = $_POST['no_hp'];
            $kata_sandi = $_POST['kata_sandi'];
            $konfirmasi_kata_sandi = $_POST['konfirmasi-kata-sandi'];

            
            if ($kata_sandi != $konfirmasi_kata_sandi) {
                echo "Konfirmasi kata sandi tidak sesuai. Silakan coba lagi.";
            } else {
                $query = "INSERT INTO login_pembeli (username, email, no_hp, kata_sandi, konfirmasi_kata_sandi) VALUES ('$username', '$email', '$no_hp', '$kata_sandi', '$konfirmasi_kata_sandi')";
                $result = mysqli_query($koneksi, $query);
                if ($result) {
                    echo '<script type="text/javascript">window.alert("Akun berhasil Dibuat");</script>';
                } else {
                    echo "Error: " . mysqli_error($koneksi);
                }
            }
        }
?>



</body>
<script src="js/bootstrap.min.js"></script>

</html>