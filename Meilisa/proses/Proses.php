<?php
    require 'models.php';

    if(!empty($_GET['aksi'] == 'tambah-customers'))
    {
        $nama_customers = strip_tags($_POST['nama_customers']);
        $alamat_customers = strip_tags($_POST['alamat_customers']);
        $id_paket = strip_tags($_POST['id_paket']);
        $tanggal = strip_tags($_POST['tanggal']);
        $tabel = 'customers';
        # proses insert
        $data[] = array(
            'nama_customers'        =>$nama_customers,
            'alamat_customers'       =>$alamat_customers,
            'id_paket'       =>$id_paket,
            'tanggal' =>$tanggal

        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../data_customers.php"</script>';
    }    

    if(!empty($_GET['aksi'] == 'tambah-paket'))
    {
        $nama_paket = strip_tags($_POST['nama_paket']);
        $harga_paket = strip_tags($_POST['harga_paket']);
        $id_kategori = strip_tags($_POST['id_kategori']);
        $tabel = 'paket';
        # proses insert
        $data[] = array(
            'nama_paket'        =>$nama_paket,
            'harga_paket'       =>$harga_paket,
            'id_kategori'       =>$id_kategori

        );
        $proses->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Data Berhasil");window.location="../data_paket.php"</script>';
    }    


    if(!empty($_GET['aksi'] == 'edit2'))
    {
        $nama_customers = strip_tags($_POST['nama_customers']);
        $alamat_customers = strip_tags($_POST['alamat_customers']);
         $id_paket = strip_tags($_POST['id_paket']);
         $tanggal = strip_tags($_POST['tanggal']);
            $data = array(
                'nama_customers'      =>$nama_customers,
                'alamat_customers'      =>$alamat_customers,
                'id_paket'      =>$id_paket,
                'tanggal'      =>$tanggal
            );
        $tabel = 'customers';
        $where = 'id_customers';
        $id = strip_tags($_POST['id_customers']);
        $proses->edit_data($tabel,$data,$where,$id);
         echo '<script>alert("Tambah Data Berhasil");window.location="../data_customers.php"</script>';

    }
    if(!empty($_GET['aksi'] == 'hapus-customers'))
    {
        $tabel = 'customers';
        $where = 'id_customers';
        $id = strip_tags($_GET['id_customers']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../data_customers.php"</script>';
    }
    if(!empty($_GET['aksi'] == 'hapus-paket'))
    {
        $tabel = 'paket';
        $where = 'id_paket';
        $id = strip_tags($_GET['id_paket']);
        $proses->hapus_data($tabel,$where,$id);
        echo '<script>alert("Hapus Data Berhasil");window.location="../data_paket.php"</script>';
    }    

    if(!empty($_GET['aksi'] == 'login'))
    {   
        
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        
        $result = $proses->proses_login($username,$password);
        if($result == 'gagal')
        {
            echo "<script>window.location='../index.php?get=gagal';</script>";
        }else{
        
            echo "<script>window.location='../data_customers.php';</script>";
        }
    }
        if(!empty($_GET['aksi'] == 'edit-paket'))
    {
        $nama_paket = strip_tags($_POST['nama_paket']);
        $harga_paket = strip_tags($_POST['harga_paket']);
        $id_kategori = strip_tags($_POST['id_kategori']);
            $data = array(
                'nama_paket'      =>$nama_paket,
                'harga_paket'      =>$harga_paket,
                'id_kategori'      =>$id_kategori,
            );
        $tabel = 'paket';
        $where = 'id_paket';
        $id = strip_tags($_POST['id_paket']);
        $proses->edit_data($tabel,$data,$where,$id);
        echo '<script>alert("Edit Data Berhasil");window.location="../data_paket.php"</script>';
    }
?>