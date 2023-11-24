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
        #customNumber {
    width: 50px; /* Sesuaikan lebar sesuai kebutuhan Anda */
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
            
                <a href="keranjang.php">
                <i class="fa-solid fa-cart-shopping"></a>
            </i>
            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-envelope"></i>
            <span>
                <i class="fa-solid fa-user"></i>
                <small style="margin-left: 10px;"><b>Akun Saya</b< /small>
            </span>
        </div>
        </div>
    </nav>
    <div>
        <h4>KERANJANG</h4>
    </div>
    <div class="container-fluid" style="border-bottom:1px solid black ;">
        <div class="row">
            <div class="col-md-1">
                <input type="checkbox" name="" id="">
            </div>
            <div class="col-md-5">
                <p>Produk</p>
            </div>
            <div class="col-md-2">
                <p>Harga Satuan</p>
            </div>
            <div class="col-md-2">
                <p>Kuantitas</p>
            </div>
            <div class="col-md-2">
                <p>Total Harga</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
                
            </div>
            <div class="col-md-2 mb-1">
                Acer Batam
            </div>

        </div>
    </div>
    <div class="container-fluid" style="border-bottom:1px solid black ;"    >
        <div class="row">
            <div class="col-md-1">
                <input type="checkbox" name="" id="">
            </div>
            <div class="col-md-1">
                <img src="logo/acer.jpg" style="width:50px;" alt="">
            </div>
            <div class="col-md-4">
            Laptop Acer TravelMate P A4DBH Core I5/I7 Gen 
            6 RAM 8GB SSD 256GB  Like baru  Mulus.......
            </div>
            <div class="col-md-2">
                <p>Rp.5.165.000</p>
            </div>
            <div class="col-md-2">
            <input type="number" id="customNumber" name="customNumber" size="1">
            </div>
            <div class="col-md-2 mb-4">
            <p>Rp.5.165.000</p>
            </div>
        </div>


        <script src="js/bootstrap.min.js"></script>
</body>

</html>