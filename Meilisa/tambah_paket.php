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
                <li><a href="data_customers.php" >Data Customers</a></li>
                <li><a href="data_paket.php" class="active">Data Paket </a></li>
                <li><a href="index.php"><font color="red">Logout</font></a></li>            
            </ul>
        </div>
    </header>
</div>
<div class="mainc garis">

    <h2>Tambah Data Paket</h2> </br>
 
       <form method="post" action="proses/Proses.php?aksi=tambah-paket">
            <table>
                  <tr>
                        <td>Nama Paket </td>
                        <td>:</td>
                        <td><input type="text" name="nama_paket"></td>
                  </tr>
                  <tr>
                        <td>Harga Paket </td>
                        <td>:</td>
                        <td><input type="text" name="harga_paket"></td>
                  </tr> 
                  <tr>
                        <td>Kategori </td>
                        <td>:</td>
                        <td>
<select name="id_kategori" id="" class="input-combobox">
                <option value="">Pilih</option>
                            <?php
                                // include "../config/koneksi.php";
                                $sql1 = "SELECT * FROM kategori";
                                $stmt = $koneksi->prepare($sql1);
                                $stmt->execute();

                                if($stmt != ''){
                                    while($data = $stmt->fetch(PDO::FETCH_NUM))  {
                                ?>
                                        <option value="<?php echo $data[0]?>"><?php echo $data[1]?></option>
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