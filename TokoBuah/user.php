<!DOCTYPE html>
<html>
<head>
	<meta charset="uf-8">
	<meta charset="viewport" content="width=device-width, intial-scale=1">
	<title>AlfonsoFruiteries</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="user.php">AlfonsoFruiteries</a></h1>
			<ul>
				<li class="active"><a href="user.php">HOME</a></li>
				<li><a href="BELANJA.html">BELANJA</i></a></li>
				<li><a href="KERANJANG.html"><i class="fas fa-shopping-basket"></i></a></li>
				<li><a href="logout.php">LOG OUT</i></a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2><a href="BELANJA.html">WELCOME TO MY TOKO</a></h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</strong>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - RioTriw. All Right reserves.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>