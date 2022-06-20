
<?php
        include 'koneksi.php';
    include 'controler.php';
        $db = new Koneksi();
    $koneksi =  $db->DBConnect();
    $proses = new controler($koneksi);
    error_reporting(0);
?>