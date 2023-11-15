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

    <style>
    #carouselExampleDark {
        height: 450px;
        width: 1200px;
        margin:auto;
        border-radius:200px;
    }

    .carousel-inner {
        height: 450px;
        width: 1200px;
    }
    </style>
</head>

<body>

    <!-- Navigation -->

    <div style="height: 25px; width: 100%; background-color: #4682A9;"></div>
    <nav class="navbar navbar-expand-lg fixed-top " style="height: 75px ; background-color: #91C8E4; margin-bottom:200px;">
        <div class="container-fluid">
            <img src="logo/logo.png" style="height: 50px; width: 100px;">
            <span class="d-flex align-items-center ml-4">
                <i class="fa-solid fa-bars"></i>
                <small style="margin-left: 10px;"><b>Kategori</b></small>
            </span>

            <form class="d-flex " role="search">
                <input style="width: 550px; height: 40px;" class="form-control me-1" placeholder="Cari Barang"
                    aria-label="Search">
                <button style="position: absolute; margin-left: 500px;" class="btn ml-1" type="submit"><i
                        class="fas fa-search"></i></button>
            </form>
            <i class="fa-solid fa-cart-shopping"></i>
            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-envelope"></i>
            <span>
                <i class="fa-solid fa-user"></i>
                <small style="margin-left: 10px;"><b>Akun Saya</b</small>
            </span>
        </div>
        </div>
    </nav>

    <!-- brand select -->

    <div class="container col-1 mt-5" style="background-color: #FAF6F6; float: left; margin-top : 25px;">
        <h6>Brand</h6>
        <?php
       include "koneksi.php";

       $query = mysqli_query($koneksi, "SELECT * FROM brand");

       while ($data = mysqli_fetch_assoc($query)){
            ?>
        <table>
            <tr>
                <td><input type="checkbox"></td>
                <td><?php echo $data['nama_brand'];?></td>
            </tr>

        </table>
        <?php
         }

        ?>
        <small style="color: #0E9BEB;">Lihat Semua</small>
    </div>
    <!-- colorsel -->

    <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="logo/gambar-iklan/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="logo/gambar-iklan/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="logo/gambar-iklan/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- list barang -->
    <?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM data_barang");
?>

<div class="container text-center">
    <div class="row">
        <?php
        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col-md-3 ml-3">
                <div class="card mb-1">
                    <img src="../elektronik-barang/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text"><?php echo $data['nama_barang']; ?></p>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                        <i class="far fa-star text-success"></i><br>
                        <a href="#" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Detail</a>
                        <a href="#" class="btn btn-danger">Harga</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>