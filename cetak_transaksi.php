<script>
type = window.print()
</script>

<div>
    <center>
    <h1>Data Transaksi</h1>
    <h2>LapStore</h2>
    </center>
</div>

<table border="1" cellpadding="5" align="center">
    <thead>
        <tr>
        <th scope="col">NO</th>
        <th scope="col">Id Transaksi</th>
                        <th scope="col">Nama barang</th>
                        <th scope="col">Harga </th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal </th>
                        <th scope="col">Pembeli</th>
                        <th scope="col">Status</th>
        </tr>
    </thead>

    <tbody>
        <?php
            include 'koneksi.php';
            
          $query = mysqli_query($koneksi, "SELECT * FROM data_transaksi");
          $no = 1;
          while ($data = mysqli_fetch_assoc($query)){
                ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['id_transaksi'];?></td>
            <td><?php echo $data['nama_barang'];?></td>
            <td><?php echo $data['total_harga'];?></td>
            <td><?php echo $data['jumlah'];?></td>
            <td><?php echo $data['tanggal_transaksi'];?></td>
            <td><?php echo $data['username_pembeli'];?></td>
            <td><?php echo $data['status_transaksi'];?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

    <p>Mengetahui,</p>
    <br>
    <br>
    <p>Petugas Toko</p>
    
    