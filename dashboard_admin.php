<?php
    session_start();

    if (!isset($_SESSION["user"])){
        header("Location:login_penjual.php");
        exit;
    }
    $user = $_SESSION['user']; 

    if (isset($_GET['logout'])) {

    session_destroy();

    header("Location:index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ADMINISTRATOR</title>
  </head>
  <body>
    
<div class="row  mt-0">
  <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color:#749BC2;">
        <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
       <img src="logo.png" width="180" alt="">
      </li>
      <li class="nav-item">
        <a class="nav-link active text-white" href="dashboard_admin.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="data_produk.php"><i class="fas fa-box-open mr-2"></i>Data Produk</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="data_transaksi.php"><i class="fas fa-dollar-sign mr-2"></i>Data Transaksi</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="?logout"><i class="fas fa-sign-out-alt mr-2"></i>Keluar</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>

  <div class="col-md-10 p-5 pt-2">
    <h3>Dashboard Admin</h3><hr> 
        <table class="table table-striped table-bordered">
        <div class="container text-center">
  <div class="row mr-5">
    <div class="col-md-3 mr-5" style="height:300px; background-color:#D9D9D9; margin: 0 100px; 0 50px; ">
      <i class="fas fa-box-open mr-2 fa-6x mt-5"></i>
      <h3 class="mt-5">Produk</h3>
    </div>
    <div class="col-md-3" style="height:300px; background-color:#D9D9D9;">
    <i class="fas fa-dollar-sign mr-2 fa-6x mt-5" ></i>
    <h3 class="mt-5">Transaksi</h3>
    </div>
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

              



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>