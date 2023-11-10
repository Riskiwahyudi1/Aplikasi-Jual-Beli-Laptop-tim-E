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
    <title>ADMINISTRATOR</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand nav-link text-white" href="#" >SELAMAT DATANG ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5> 
          <i class="fas fa-envelope-square mr-3"></i>
          <i class="fas fa-bell-slash mr-3"></i>
          <i class="fas fa-sign-out-alt mr-3"></i>
        </h5>
        </div>
  </div>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-info mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href=""><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="" ><i class="fas fa-users mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
      </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="" ><i class="far fa-calendar-alt mr-2"></i>Jadwal Kuliah</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>

  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</h3><hr>
        <a href="tambah_mhs.php" class="btn btn-primary mb-2" data_toggle="modal" data-target="#tambahmhs"> 
        <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA MAHASISWA</a>

        <table class="table table-stripped table-bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NIM</th>
              <th scope="col">NAMA MAHASISWA</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">JURUSAN</th>
              <th colspan="3" scope="col">AKSI</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';
            
            $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
             <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $data['nim'];?></td>
              <td><?php echo $data['nama'];?></td>
              <td><?php echo $data['alamat'];?></td>
              <td><?php echo $data['jurusan'];?></td>
              <td>
                <i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                <a href="ubah_mhs.php" data-toggle="modal" data-target="#editmhs<?php echo $data['nim'];?>">Edit</a>
                <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                <a href="hapus_mhs.php" data-toggle="modal" data-target="#deletemhs<?php echo $data['nim'];?>">Delete</a>
            </td>
            </tr>

            <?php
            }
            ?>
        </table>   

        </tbody>
      </table>
  </div>

</div>
              <!-- Simpan Modal  -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>