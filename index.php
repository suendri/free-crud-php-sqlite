<?php 

/**
 * Gosoftware Media Indonesia 2019
 * --
 * --
 * Gosoftware Media Abadi
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

include "config.php";
include "koneksi.php"; 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PHP CRUD WITH DATABASE SQLite</title>
	<link href="assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="container">

		<h3 class="text-center mb-3">PHP CRUD WITH DATABASE SQLite</h3>			

		<?php if (isset($_SESSION['user_name'])) { ?>
			<div class="alert alert-success my-2"> 
				Selamat Datang, <strong><?php echo $_SESSION['user_name']; ?></strong>
				<div class="float-right">
					<a href="logout.php"><strong>Logout</strong></a> 
				</div>
			</div>
		<?php } ?>


		<?php 

		if (isset($_SESSION['user_name']))
		{
			if (isset($_GET['halaman']))
			{
				include $_GET['halaman'] . '.php';
			} else {
				include "utama.php";
			}

		} else {
			include "login.php";
		}

		?>

	</div>	

	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>