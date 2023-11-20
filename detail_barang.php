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
        margin: auto;
        border-radius: 200px;
    }

    .carousel-inner {
        height: 450px;
        width: 1200px;
    }

    .jarak-botton {
        margin-top: px;
    }
    </style>
</head>

<body>

    <!-- Navigation -->

    <div style="height: 25px; width: 100%; background-color: #4682A9;"></div>
    <nav class="navbar navbar-expand-lg fixed-top "
        style="height: 75px ; background-color: #91C8E4; margin-bottom:200px;">
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

       $query = mysqli_query($koneksi, "SELECT * FROM data_barang");

       $brand = array();
       while ($data = mysqli_fetch_assoc($query)){
            ?>
        <table>
            <tr>
            <?php
            if (!in_array($data['brand'], $brand)) {
                ?>
                <td><input type="checkbox"></td>
                <td><?php echo $data['brand'];?></td>
                <?php
                 array_push($brand, $data['brand']);
                 ?>
                <?php
            }else {
            ?>  
                <?php
            }
            ?>
            </tr>
        </table>
        <?php
    }
        ?>
        <small style="color: #0E9BEB;">Lihat Semua</small>
    </div>
    
    <!-- colorsel -->

    <div class="container mt-8 ukuran-grid mt-5">
    <div class="row">
        
        <div class="container-fluid col-md-4 ml-3 ">
            <img src="logo/1.jpg" alt="..." width="100%">
        </div>
        <?php
include 'koneksi.php';
$id_barang = $_GET['id_barang'];

$result = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id_barang='$id_barang'");
while($user_data = mysqli_fetch_array($result))
{
$nama_barang = $user_data['nama_barang'];
$harga = $user_data['harga'];
$stok_barang = $user_data['stok_barang'];
$deskripsi_barang = $user_data['deskripsi_barang'];
}
?>
        <div class="countainer-fluid col-md-8 ml-3 ">
            <div class="card mb-1">
                <div class="card-body bg-light">
                    <p class="card-text jarak-botton"><?php echo $nama_barang; ?></a></p>
                    <div class="countainer m-0 p-0">
                        <p class="card-text mt-0 jarak-botton"><?php echo $harga; ?></p>
                        <i class="fas fa-star text-warning -botton"></i>
                        <i class="fas fa-star text-warning jarak-botton"></i>
                        <i class="fas fa-star text-warning jarak-botton"></i>
                        <i class="fas fa-star-half-alt text-warning jarak-botton"></i>
                        <i class="far fa-star text-warning jarak-botton"></i><br><br>
                        <p class="card-text jarak-botton">Tersedia <?php echo $stok_barang; ?></p>
                    </div><br>
                    <div>
                    <button type="button" class="btn btn-primary btn-lg">
                        <span class="fa-solid fa-cart-shopping"></span>
                        Masukkan Keranjang
                    </button>
                    <button type="button" class="btn btn-primary btn-lg">
                        Beli Sekarang
                    </button>
                </div>
                </div>
                <div class="countainer m-0 p-0">
                    <h6>Deskripsi Barang</h6>
                    <p class="card-text mt-0 jarak-botton"><?php echo nl2br($deskripsi_barang); ?></p>
                </div><br>
                <div class="circle-container">
                <img src="logo/1.jpg" alt="Foto Profil" style="border-radius: 50%;" width="6%">
                Batam Cell
                </div><br>
            </div>
        </div>

        
        <!-- list barang -->
        <?php
        include "koneksi.php";
        
        $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
        ?>

        <div class="container mt-4 ukuran-grid">
            <div class="row">
                <?php
                while($data = mysqli_fetch_assoc($query)) {
                ?>
                <div class="countainer-fluid col-md-2 ml-3 ">
                    <div class="card mb-1">
                        <img src="logo/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body bg-light">
                            <h5 class="card-title"><?php echo $data['brand'];?></h5>
                            <p class="card-text jarak-botton"><a href="detail_barang.php?id_barang=<?php echo $data['id_barang'];?>"><?php echo $data['nama_barang'];?></a></p>
                            <div class=" countainer m-0 p-0">
                                <p class="card-text mt-0 jarak-botton"><?php echo $data['harga']; ?></p>
                                <p class="card-text jarak-botton">Tersedia <?php echo $data['stok_barang']; ?></p>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star-half-alt text-warning jarak-botton"></i>
                                <i class="far fa-star text-warning jarak-botton"></i><br>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
</body>

</html>