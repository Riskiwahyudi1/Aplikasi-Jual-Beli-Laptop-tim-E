<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <?php
    include 'koneksi.php';

    // Periksa apakah formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tangkap data dari formulir
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Query ke database untuk memeriksa login
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $koneksi->query($sql);

        // Periksa apakah data pengguna ditemukan
        if ($result->num_rows > 0) {
            echo "Login berhasil!";
            // Lakukan tindakan setelah login berhasil
        } else {
            echo "Login gagal. Periksa kembali username dan password Anda.";
        }
    }
    ?>

    <div class="card-body col-md-4 mx-auto mv-auto" style="background-color: #FAF6F6; margin-top : 20vh;">
        <center>
            <h5 class="text-primary mt-5" style="padding-top: 2rem ;">Masuk </h5>
        </center>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="col-md-6 mx-auto mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="col-md-6 mx-auto mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <center>
                <button id="noedit" type="button" class="btn btn-primary ">Masuk</button>
            </center>
            <center style="padding-bottom: 2rem; margin :auto;">
                <small class="pull-right pb-5"> Belum Punya Akun? <a href="#">Daftar</a></small>
            </center>
        </form>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>

</html>