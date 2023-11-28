<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $brand = $_POST["brand"];
    $deskripsi_barang = $_POST["deskripsi_barang"];
    $harga_barang = $_POST["harga_barang"];
    $stok_barang = $_POST["stok_barang"];
    
    $direktori = "file/";
    $foto_barang = $_FILES["namaFile"]['name'];
    move_uploaded_file($_FILES['namaFile']['tmp_name'], $direktori . $foto_barang);
    
    $query = "INSERT INTO data_barang (id_barang, nama_barang, brand, deskripsi_barang, harga, foto_barang, stok_barang) VALUES ('$id_barang', '$nama_barang','$brand', '$deskripsi_barang', '$harga_barang', '$foto_barang', '$stok_barang')";

    if (mysqli_query($koneksi, $query)) {
        echo '<script type="text/javascript">window.alert("Barang sudah ditambahkan.");</script>';
        header("Location: data_produk.php");
        exit;
    } else {
        echo "Gagal menambahkan barang: " . mysqli_error($koneksi);
    }
}


?>

<?php

include 'koneksi.php';
$id_barang = $_GET['id_barang'];
$result = mysqli_query($koneksi, "DELETE FROM data_barang WHERE id_barang='$id_barang'");
header("Location:data_produk.php");
?>
