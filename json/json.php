<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM data_kecantikan";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'ID' => $row ['ID'],
                'nama_pelanggan' => $row['nama_pelanggan'],
                'alamat' => $row['alamat'],
                'nama_produk' => $row['nama_produk'],
                'kode_produk' => $row['kode_produk'],
            ) );
        }
        
    
    echo json_encode ( array('pelanggan' => $result) );
    }
?>