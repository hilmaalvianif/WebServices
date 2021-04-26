<?php
include ('konek.php');
$xml = simplexml_load_file('data.xml'); //parse the xml file into object
foreach( $xml->children() as $kecantikan) 
{
$nama_pelanggan = $kecantikan->nama_pelanggan; //get the childnode nama_pelanggan
$alamat = $kecantikan->alamat; //get the child node alamat
$nama_produk = $kecantikan->nama_produk; //get the child node nama_produk
$kode_produk = $kecantikan->kode_produk; //get the child node kode_produk
echo 'nama_pelanggan : '.$nama_pelanggan.'<br />';
echo 'alamat : '.$alamat.'<br />';
echo 'nama_produk : '.$nama_produk.'<br />';
echo 'kode_produk : '.$kode_produk.'<br />';
echo '<br>';

$query = "INSERT INTO data_kecantikan 
VALUES('$nama_pelanggan','$alamat','$nama_produk','$kode_produk')";
    mysqli_query($koneksi, $query);
}
?>