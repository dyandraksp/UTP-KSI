<?php
// periksa apakah user sudah login, cek kehadiran session name
// jika tidak ada, redirect ke login.php
session_start();
if (!isset($_SESSION["nama"])) {
header("Location: login.php");
}
// buka koneksi dengan MySQL
include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	body {
	background-image: url(image/images.jpg);
	background-size: cover;
	background-attachment: fixed;
	</style>
	
	<title>Toko buah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>

	<?php
	include('dbconnect.php');
	//query
	$query = "SELECT * FROM produk";
	$result = mysqli_query($link , $query);
	?>

	<div class="container bg-success" style="padding-top: 30px; padding-bottom: 50px;">
	<h3><center>Form Tambah Data</center></h3><br>
		<form role="form" action="insert.php" method="post">
			<div class="form-group">
				<label>Nama Buah</label>
				<input type="text" name="nama_buah" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi Buah</label>
				<input type="text" name="deskripsi_buah" class="form-control">
			</div>
			<div class="form-group">
				<label>Harga Buah</label>
				<input type="text" name="harga_buah" class="form-control">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok_buah" class="form-control">
			</div>
			<button type="submit" class="btn btn-info btn-block">Tambah Buah</button><br><br>
			<a href="index.php" class="btn btn-danger btn-block">Batal</a>
			</div>					
		</form>
</body>
</html>