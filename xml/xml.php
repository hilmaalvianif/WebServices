<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "kecantikan") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from data_kecantikan ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('data_kecantikan');
    $track->addChild('nama_pelanggan', $row['nama_pelanggan']);
    $track->addChild('alamat', $row['alamat']);
    $track->addChild('nama_produk', $row['nama_produk']);
    $track->addChild('kode_produk', $row['kode_produk']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>