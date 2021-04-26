<?php

    require_once('koneksi.php');

    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $nama_produk = $_POST['nama_produk'];
    $kode_produk = $_POST['kode_produk'];
   

    $query = "INSERT INTO data_kecantikan(nama_pelanggan,alamat,nama_produk,kode_produk)VALUES('$nama_pelanggan','$alamat','$nama_produk','$kode_produk')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>