<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>ADMINISTRATOR</title>
</head>

<body>

    <div class="row no-gutters mt-0">
        <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color:#749BC2;">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <img src="logo.png" width="180" alt="">
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i
                            class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=""><i class="fas fa-chalkboard-teacher mr-2"></i>Data Produk</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-users mr-2"></i>Data
                        Transaksi</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>


        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas mr-2"></i> Data Produk</h3>
            <hr>
                <a href="#" class="btn btn-success mb-3 mx-auto" data-toggle="modal" data-target="#tambahproduk"><i class="fas fa-plus-circle mr-2"></i>Tambah Data Produk</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Id barang</th>
                            <th scope="col">Nama barang</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Deskripsi barang</th>
                            <th scope="col">Harga barang</th>
                            <th scope="col">Stok barang</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                <?php
              include 'koneksi.php';

              $query = mysqli_query($koneksi, "SELECT * FROM data_barang");
              $no = 1;
              while ($data = mysqli_fetch_assoc($query)){
              ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['id_barang'];?></td>
                        <td><?php echo $data['nama_barang'];?></td>
                        <td><?php echo $data['brand'];?></td>
                        <td><?php echo $data['deskripsi_barang'];?></td>
                        <td><?php echo $data['harga'];?></td>
                        <td><?php echo $data['stok_barang'];?></td>
                        <td>
                            <i class="fas fs-edit bg-success p-2 text-white rounded"></i>
                            <a href="#" data-toggle="modal"
                                data-target="#editproduk<?php echo $data['id_barang'];?>">Edit</a>
                            <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                            <a href="#" data-toggle="modal"
                                data-target="#deleteproduk<?php echo $data['id_barang'];?>">Delete</a>
                        </td>
                    </tr>
                   
                    <div class="example-modal">
                    <div id="deleteproduk<?php echo $data['id_barang']; ?>" class="modal fade" role="dialog"
                        style="display:none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <center><h5 class="modal-title" >Konfirmasi Hapus Data</h5></center>
                                </div>
                                <div class="modal-body">
                                    <h6 style="color :red;"align="center">Apakah anda yakin ingin menghapus ID <?php echo $data['id_barang'];?><strong><span class="grt"></span></strong> Nama Barang <?php echo $data['nama_barang'];?>?</h6>
                                </div>
                                <div class="modal-footer">
                                    <button id="nodelete" type="button" class="btn btn-danger pull-left"
                                        data-dismiss="modal">Cancle</button>
                                    <a href="simpan_produk.php?id_barang=<?php echo $data['id_barang']; ?>"
                                        class="btn btn-primary">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                  
                    
                    
                    
                    <?php
              }
              ?>
              <!-- Simpan Modal  -->
              <div class="example-modal">
              <div id="tambahproduk" class="modal fade" role="dialog" style="display:none;">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h3 class="modal-title">Tambah Data Baru</h3>
                          </div>
                          <div class="modal-body">
                              <form action="simpan_produk.php" method="post" enctype="multipart/form-data">
                                  <div class="form-group mb-2">
                                      <input type="number" class="form-control" id="id_barang" name="id_barang" placeholder="ID BARANG" value="">
                                  </div>
                                  <div class="form-group mb-2">
                                      <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="NAMA BARANG" value="">
                                  </div>
                                  <div class="form-group mb-2">
                                      <select id="brand" name="brand" class="form-control">
                                          <option value="">--Pilih Brand--</option>
                                          <option value="Asus">Asus</option>
                                          <option value="Lenovo">Lenovo</option>
                                          <option value="Acer">Acer</option>
                                          <option value="Apple">Apple</option>
                                          <option value="DEEL">DEEL</option>
                                          <option value="HP">HP</option>
                                          <option value="Toshiba">Toshiba</option>
                                          <option value="MSI">MSI</option>
                                          <option value="Razer">Razer</option>
                                          <option value="LG">LG</option>
                                          <option value="Sony">Sony</option>
                                          <option value="Samsung">Samsung</option>
                                      </select>
                                  </div>
                                  <div class="form-group mb-2">
                                      <!-- <textarea type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" placeholder="DESKRIPSI BARANG" value=""> </textarea> -->
                                      <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" placeholder="DESKRIPSI BARANG"></textarea>
          
                                  </div>
                                  <div class="form-group mb-2">
                                      <input type="number" class="form-control" id="harga_barang" name="harga_barang" placeholder="HARGA BARANG" value="">
                                  </div>
                                  <div class="form-group mb-2">
                                      <input type="number" class="form-control" id="stok_barang" name="stok_barang" placeholder="STOK BARANG" value="">
                                  </div>
                                  <div class="form-group mb-2">
                                      <label for="namaFile">Tambahkan Foto</label><br>
                                      <input type="file" class="form-control-file" id="namaFile" name="namaFile">
                                  </div>
                                  <div class="modal-footer mb-2">
                                      <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                      <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
     
</body>

</html>