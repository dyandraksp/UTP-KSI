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

	<title>Toko Buah</title>
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
	$query = "SELECT * FROM produk ";

	$result = mysqli_query($link , $query);

	?>

	<div class="container bg-success" style="padding-top: 10px; padding-bottom: 35px;">
		<p id="tanggal" style="text-align: right; font-size: 15px"><?php echo date("d M Y"); ?></p>
		<h1><center>Toko Buah</center></h1>
		<div class="row">
			<div class="col-sm-12">
				<a href="tambah.php" class="btn btn-info">Tambah Buah</a>
				<h3><center>Stock buah<center></h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama buah</th>
							<th>Deskripsi buah</th>
							<th>Harga Buah</th>
							<th>Stok buah</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
					
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['nama_buah']; ?></td>
							<td><?php echo $row['deskrpsi_buah']; ?></td>
							<td><?php echo $row['harga_buah']; ?></td>
							<td><?php echo $row['stok_buah']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_buah'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id_buah']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($link); 
						?>
					</tbody>
				</table><a href="logout.php" class="btn btn-danger">Keluar</a>
			</div>
		</div>
	</div>
</body>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>
</html> 