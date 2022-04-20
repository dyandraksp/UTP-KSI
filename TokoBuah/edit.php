<?php
// periksa apakah user sudah login, cek kehadiran session name
// jika tidak ada, redirect ke login.php
session_start();
if (!isset($_SESSION["nama"])) {
header("Location: login.php");
}
// buka koneksi dengan MySQL
include('dbconnect.php');

$id = $_GET['id_buah'];
$namabuah = $_GET['nama_buah'];
$deskripsi = $_GET['deskrpsi_buah'];
$harga = $_GET['harga_buah'];
$stok = $_GET['stok_buah'];

//query update
$query = "UPDATE produk SET nama_buah='$nama' , deskrpsi_buah='$deskripsi' , harga_buah='$harga' , stok_buah='$stok' WHERE id_buah='$id' ";

if (mysqli_query($link, $query)) {
	header("location:home.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($link);
}

mysqli_close($link);
?>