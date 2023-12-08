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
        margin-top: -10px;
    }

    .two-line-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    </style>
</head>

<body>

    <!-- Navigation -->

    <div style="height: 25px; width: 100%; background-color: #4682A9;"></div>
    <nav class="navbar navbar-expand-lg fixed-top"
        style="height: 75px; background-color: #91C8E4; margin-bottom: 200px;">
        <div class="container-fluid">
            <img src="logo/logo.png" style="height: 50px; width: 100px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <input style="width: 550px; height: 40px; position: absolute; margin-left: -850px;"
                        class="form-control me-1 d-flex justify-content-between align-items-center"
                        placeholder="Cari Barang" aria-label="Search">
                </li>
                <li class="nav-item">
                    <button class="btn ml-1" style="position: absolute; margin-left: -350px;" type="submit"><i
                            class="fas fa-search"></i></button>
                </li>
                <li class="nav-item mr-5" style="position: ; margin-right: 30px;">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login_penjual.php">Login Penjual</a></li>
                            <li><a class="dropdown-item" href="login.php">Login Pembeli</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mr-5" style="position: absolute; margin-left: -110px;">
                    <div class="dropdown">
                        <button class="btn bg-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Register
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="register_penjual.php">Register Penjual</a></li>
                            <li><a class="dropdown-item" href="register.php">Register Pembeli</a></li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>



    <!-- brand select -->

    <div class="container col-1 mt-5" style="background-color: #FAF6F6; float: left; margin-top : 25px;">
        <h6 class="mt-2"><b>Katalog</b></h6>
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
                <td><input type="checkbox" name="brand"></td>
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

        <!-- list barang -->
        <?php
        include "koneksi.php";
        
        $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
        ?>

        <div class="container mt-4 ">
            <div class="row">
                <?php while($data = mysqli_fetch_assoc($query)) { ?>
                <div class="col-md-2 ml-3 fixed-width-column ">
                    <div class="card mb-1">
                        <img src="file/<?php echo $data['foto_barang'] ?>" class="card-img-top" alt="..."
                            style="width: 175px; height: 175px;">
                        <div class="card-body bg-light">
                            <h5 class="card-title"><?php echo $data['brand'];?></h5>
                            <p class="card-text jarak-botton two-line-ellipsis"><a
                                    href="detail_barang.php?id_barang=<?php echo $data['id_barang'];?>"><?php echo $data['nama_barang'];?></a>
                            </p>
                            <div class=" countainer m-0 p-0">
                                <p class="card-text mt-0 jarak-botton">Rp.<?php echo $data['harga']; ?></p>
                                <p class="card-text jarak-botton">Tersedia <?php echo $data['stok_barang']; ?></p>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star text-warning jarak-botton"></i>
                                <i class="fas fa-star-half-alt text-warning jarak-botton"></i>
                                <i class="far fa-star text-warning jarak-botton"></i><br>
                                <p class="far jarak-botton">5.0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>



    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>