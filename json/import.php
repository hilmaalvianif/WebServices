<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
//koneksi ke database
$connection = mysqli_connect("localhost","root","","kecantikan") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke   data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details

$nama_pelanggan = $data['nama_pelanggan'];
$alamat= $data['alamat'];
$nama_produk = $data['nama_produk'];
$kode_produk = $data['kode_produk'];



//insert data ke table tbl_emp 
$sql = "INSERT INTO data_kecantikan(nama_pelanggan, alamat, nama_produk, kode_produk)
VALUES('$nama_pelanggan', '$alamat', '$nama_produk','$kode_produk')";

if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>