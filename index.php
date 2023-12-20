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
        max-height: 400px;
    }

    #carouselExampleDark .carousel-inner img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .jarak-botton {
        margin-top: -10px;
    }

    .crop-line {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        text-overflow: ellipsis;

    }

    .card-img-top {
        object-fit: cover;
        height: 175px;
    }

    .card-body .container {
        margin: 0;
        padding: 0;
    }

    .card-body p {
        margin: 0;
    }
    </style>
</head>

<body>

    <!-- Navigation -->

    <div style="height: 25px; width: 100%; background-color: #4682A9; margin-bottom: 70px;"></div>
    <nav class="navbar navbar-expand-lg fixed-top" style="height: 75px; background-color: #91C8E4; ">
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

    <!-- colorsel -->


    <div class="row">
        <div class="col-md-1 " style="background-color: #FAF6F6 ;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2); position:fixed; padding-bottom:80vh;">
            <h6 class="mt-2 ms-3 mb-2"><b>Kategori</b></h6>
            <?php
           include "koneksi.php";
    
           $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
    
           $brand = array();
           while ($data = mysqli_fetch_assoc($query)){
                ?>
            <table class=" ms-3">
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
        <div class="col-md-10 " style="background-color:#FAF4F4; padding: 20px; margin-left:12vw;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);">
            <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="logo/gambar-iklan/gambar2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="logo/gambar-iklan/gambar1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="logo/gambar-iklan/gambar3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
                <?php
                include "koneksi.php";
                
                $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
                ?>
                <div class="container-fluid mt-4">
                    <div class="row">
                        <?php while($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col-md-2 ml-3 fixed-width-column">
                            <div class="card mb-1">
                                <img src="file/<?php echo $data['foto_barang'] ?>" class="card-img-top"
                                    alt="Product Image">
                                <div class="card-body bg-light">
                                    <h6 class="card-title"><?php echo $data['brand'];?></h5>
                                        <p class="card-text crop-line text-primary"><a
                                                href="detail_barang.php?id_barang=<?php echo $data['id_barang'];?>"><?php echo $data['nama_barang'];?></a>
                                        </p>
                                        <p class="card-text mt-1 text-warning">Rp.<?php echo $data['harga']; ?></p>
                                        <p class="card-text">Tersedia <?php echo $data['stok_barang']; ?></p>
                                        <div class="countainer-fluid col mt-1">
                                            <p class="fas me-1 ">5.0</p>
                                            <i class="fas fa-star text-warning "></i>
                                            <i class="fas fa-star text-warning "></i>
                                            <i class="fas fa-star text-warning "></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning "></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>

    </div>


    <!-- list barang -->








    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>