<?php

 require 'proses/models.php';
?>
<style>
    table{
        background-color: white;
        border-spacing: 1;
        margin: 10px;
        position: relative;
        
        width: 80%;
    }
        table th{
        background-color: rgb(203 202 89);
        margin: 0;
        height: 50px;
        color: white;
        font-family: 'Be Vietnam Pro', sans-serif;
    }
        table td{
            text-align: center;
        font-family: 'Be Vietnam Pro', sans-serif;
        padding: 10px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="assets/style/style.css">

</head>
<body>
    <div class="garis">
    <header class="kepala">
        <div class="clearfix">
            <div class="logo">
                <h1>Dekorasi dan Gaun Padang Tualang </h1>
            </div>

        </div>
        <div class="bagian-bawah">
            <ul class="menu">
                <li><a href="data_customers.php" class="active">Data Customers</a></li>
                <li><a href="data_paket.php">Data Paket </a></li>
                <li><a href="index.php"><font color="red">Logout</font></a></li>
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">
    <h2>Data Customers</h2> </br>
      <a href="tambah_customers.php" class="active">Tambah Customers</a>
      <table border="1">
            <tr>

                  <th>No</th>
                  <th>Nama Customers</th>
                  <th>Pesanan</th>
                  <th>Alamat Customers</th>
                  <th>Tanggal Pesan</th>
                  <th colspan="2">Aksi</th>
                 
            </tr>
               <?php
                $no=1;
               $hasil = $proses->tampil_customers();
             foreach($hasil as $row){ 
             ?>               
               <tr>

   
                        <td><?= $no++?>.</td>
                        <td><?php echo $row['nama_customers']; ?></td>
                        <td><?php echo $row['nama_paket']; ?> </td>
                        <td><?php echo $row['alamat_customers']; ?> </td>
                        <td><?php echo $row['tanggal']; ?> </td>
                        <td><a href="edit_customers.php?id_customers=<?php echo $row['id_customers']; ?>">Edit</a></td>
                      <td><a href="proses/Proses.php?aksi=hapus-customers&id_customers=<?php echo $row['id_customers'];?>" onclick="return confirm('Apakah yakin data akan di hapus?')">Hapus</a></td>
                     
                  </tr>
            <?php } ?>

      </table>


    </div>

    <footer class="kaki">
        <br><br>
        <p></p>
    </footer>
</body>
</html>