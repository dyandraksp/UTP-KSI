<?php
session_start();
if (!isset($_SESSION["nama"])) {
header("Location: login.php");
}
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
	
	<title>Form Edit Buah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

include('dbconnect.php');

//query
$query = "SELECT * FROM produk WHERE id_buah='$id'";
$result = mysqli_query($link, $query);

?>

<div class="container bg-success" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Buah</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_buah" value="<?php echo $row['id_buah']; ?>">

		<div class="form-group">
			<label>Nama Buah</label>
			<input type="text" name="judul_buku" class="form-control" value="<?php echo $row['nama_buah']; ?>">			
		</div>

		<div class="form-group">
			<label>Deskripsi Buah</label>
			<input type="text" name="terbit_buku" class="form-control" value="<?php echo $row['deskrpsi_buah']; ?>">			
		</div>

		<div class="form-group">
			<label>Harga Buah</label>
			<input type="text" name="genre_buku" class="form-control" value="<?php echo $row['harga_buah']; ?>">			
		</div>

		<div class="form-group">
			<label>Stok Buah</label>
			<input type="text" name="harga_buku" class="form-control" value="<?php echo $row['stok_buah']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Buah</button><br><br>
		<a href="index.php" class="btn btn-danger btn-block">Batal</a>
		<?php 
		}
		mysqli_close($link);
		?>				
	</form>
</div>
</body>
</html> 