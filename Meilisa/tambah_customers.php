<?php
require 'proses/models.php';
?>
<!DOCTYPE html>
<html lang="en">
<style>
select {
    width: 176px;

}    
</style>
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
                <h1> Dekorasi dan Gaun Padang Tualang</h1>
            </div>

        </div>
        <div class="bagian-bawah">
            <ul class="menu">
                <li><a href="data_customers.php" class="active">Data Customers</a></li>
                <li><a href="data_paket.php" >Data Paket </a></li>
                <li><a href="index.php"><font color="red">Logout</font></a></li>            
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">

    <h2>Input Data Customers</h2> </br>
 
       <form method="post" action="proses/Proses.php?aksi=tambah-customers">
            <table>
                  <tr>
                        <td>Nama Customers </td>
                        <td>:</td>
                        <td><input type="text" name="nama_customers"></td>
                        <input type="hidden" name="tanggal"value="<?= date('Y-m-d');?>">
                  </tr>
                  <tr>
                        <td>Alamat Customers </td>
                        <td>:</td>
                        <td><input type="text" name="alamat_customers"></td>
                  </tr> 
                  <tr>
                        <td>Pesanan </td>
                        <td>:</td>
                        <td>
<select name="id_paket" id="" class="input-combobox">
                <option value="">Pilih</option>
                            <?php
                                // include "../config/koneksi.php";
                                $sql1 = "SELECT * FROM paket";
                                $stmt = $koneksi->prepare($sql1);
                                $stmt->execute();

                                if($stmt != ''){
                                    while($data = $stmt->fetch(PDO::FETCH_NUM))  {
                                ?>
                                        <option value="<?php echo $data[0]?>"><?php echo $data[2]?></option>
                                <?php

                                    }
                                } else{
                                    echo "Data tidak ada";
                                }
                            ?>
            </select>
</td>
                  </tr>                                    
                  <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="SIMPAN"></td>
                  </tr>
            </table>
      </form>
  </div>

    <footer class="kaki">
        <br><br>
        <p></p>
    </footer>
</body>
</html>