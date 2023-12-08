<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
}
$user = $_SESSION['user'];

if (isset($_GET['logout'])) {

    session_destroy();

    header("Location:login.php");
    exit;
}
?>

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
            width: 50px;
            /* Sesuaikan lebar sesuai kebutuhan Anda */
        }

        html {
            height: 100%;
            width: 100%;
        }

        .countainer {
            display: flex;
            justify-content: center;

        }

        .botton {
            width: 20px;
            height: 20px;
            background-color: #D9D9D9;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0 5px
        }

        #angka {
            width: 20px;
            height: 20px;
            background-color: #D9D9D9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .angka {
            width: 20px;
            height: 20px;
            background-color: #D9D9D9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px
        }


        .botton p {
            text-align: center;
            margin: 0;

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

            <a href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i></a>

            <i class="fa-solid fa-bell"></i>
            <i class="fa-solid fa-envelope"></i>
            <span>
                <i class="fa-solid fa-user"></i>
                <small style="margin-left: 10px;"><b>
                        <?php echo $user; ?>
                    </b></small>
            </span>
        </div>
        </div>
    </nav>
    <div class="container-fluid col-md-11" style="margin-top:80px">
    <table class="row">
        <th>
        <b>No. Barang</b>
        <td>:</td>
        <td>123456</td>
        </th><br>
        <th>
        <b>Tanggal</b>
        <td>:</td>
        <td>1 januari 2023</td>
        </th><br>
        <th>
        <b>Pembayaran</b>
        <td>:</td>
        <td>Bank BCA</td>
        </th><br>
    </table>
        <div class="row mt-3" style="border-top: solid 1px black;">
            <div class="col-md-4 me-5 mt-1 mb-2" style="margin-left:50px;"">
          <small><b> Nama Produk</b></small>
        </div>
        <div class=" col-md-2 ">
          <small><b> jumlah Produk</b></small>
        </div>
        <div class=" col-md-3 " style="">
          <small><b> Harga Produk</b></small>
        </div>
        <div class=" col-md-2 " style="">
          <small><b> Subtotal</b></small>
        </div>
</div>
        <div class=" row mt-3">
                <div class="col-md-1 " style="margin-left:50px;">
                    <img src="laptop1.jpg" alt="" class="w-75 h-75 me-2">
                </div>
                <div class="col-md-3 me-5">
                    <p>Laptop Acer TravelMate P A4DBH Core I5/I7 Gen 6 RAM 8GB SSD 256GB Like baru Mulus.......</p>
                </div>
                <div class="col-md-2 ">
                    <p>1 Pcs</p>
                </div>
                <div class="col-md-3 " style="color:#FF7F09">
                    <p>Rp5.165.000</p>
                </div>
                <div class="col-md-2 " style="color:#FF7F09">
                    <p>Rp5.165.000</p>
                </div>

            </div>
            <div class="row mt-3" style="background-color:#C2C0C0;">
                <div class="col-md-4 me-5 mt-1 mb-2" style="margin-left:50px;"">
          <b> Subtotal</b>
        </div>
        <div class=" col-md-2 ">
          <small><b></b></small>
        </div>
        <div class=" col-md-3 " style="">
          <small><b></b></small>
        </div>
        <div class=" col-md-2 " style=" color:#FF7F09">
                    <b> Rp.5.165.000</b>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 me-5 mt-1 mb-2" style="margin-left:50px;"">
          <b> JNT EXPRESS</b>
        </div>
        <div class=" col-md-2 ">
          <small><b></b></small>
        </div>
        <div class=" col-md-3 " style="">
          <small><b></b></small>
        </div>
        <div class=" col-md-2 " style=" color:#FF7F09">
                    <b> Rp.35.000</b>
                </div>
            </div>
            <div class="row mt-3" style="background-color:#C2C0C0;">
                <div class="col-md-4 me-5 mt-1 mb-2" style="margin-left:50px;">
                    <b> Total</b>
                </div>
                <div class=" col-md-2 ">
                    <small><b></b></small>
                </div>
                <div class=" col-md-3 " style="">
                    <small><b></b></small>
                </div>
                <div class=" col-md-2 " style="color:#FF7F09">
                    <b> Rp.5.200.000</b>
                </div>
            </div>
            <div  class="row mt-5" style="border-top: solid 1px black;">
                <b>Tujuan Pengiriman</b>
                <b>Riski Wahyudi</b>
                <p>perumahan xxxx block x no 99 kecamatan mangsang</p>
                <p>SEI SUNGAI BEDUK, KOTA BATAM, KEPULAUAN RIAU, ID 1234</p>
                <P>0869696969</P>