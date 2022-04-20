<?php
// periksa apakah user sudah login, cek kehadiran session name
// jika tidak ada, redirect ke login.php
session_start();
if (!isset($_SESSION["nama"])) {
header("Location: login.php");
}
// buka koneksi dengan MySQL
include('dbconnect.php');

//$id = $_GET['id_buah'];
$namabuah = $_POST['nama_buah'];
$deskripsi = $_POST['deskripsi_buah'];
$harga = $_POST['harga_buah'];
$stok = $_POST['stok_buah'];


$query =  "INSERT INTO produk (id_buah, nama_buah , deskrpsi_buah , harga_buah , stok_buah) VALUES('', '$namabuah' , '$deskripsi' , '$harga' , '$stok')";

if (mysqli_query($link , $query)) {
	header("location:home.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($link);
}

mysqli_close($link);
?>