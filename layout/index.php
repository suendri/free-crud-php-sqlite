<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="sistem,crud,php,sqlite,phpbego,gosoftware">
	<meta name="description" content="FREE CRUD PHP SQLite">
	<meta name="author" content="Suendri">

	<title>CRUD PHP SQLite</title>
	<link href="<?php echo URL; ?>/layout/assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/datatables.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/style.css">

	<script src="<?php echo URL; ?>/layout/assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo URL; ?>/layout/assets/js/datatables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#dtb').DataTable({
				/*responsive: true */
				"ordering": false
			}); 
		});
	</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div class="container">
				<a class="navbar-brand text-uppercase" href="<?php echo URL; ?>">CRUD PHP SQLite</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo URL; ?>">Home</a>
						</li>					
						<?php if (App\Controller::session('login') == true) { ?>	
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/mahasiswa">Mahasiswa</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/user">User</a>
							</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo URL; ?>/about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo URL; ?>/contact">Contact</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<?php if (!App\Controller::session('login')) { ?>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/login">Login</a>
							</li>
						<?php } else { ?>
							<li class="nav-item dropdown">
								<a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="<?php echo URL; ?>/akun"><i class="fa fa-user mr-2"></i> <?php echo App\Controller::session('user_name') ?></a>
									<a class="dropdown-item" href="<?php echo URL; ?>/logout"><i class="fa fa-sign-out mr-2"></i> Logout</a></a>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main role="main">

		<div class="jumbotron">
			<div class="container">
				<h1 class="display-4 font-weight-bold">Gosoftware Media</h1>
				<div>Free Create Read Update and Delete with PHP using PDO and Database SQLite</div>
			</div>
		</div>

		<div class="container">
			<div class="row">			
				<div class="col">
					<?php require_once "inc/web.php"; ?>
				</div>
			</div>
		</div>

	</main>

	<footer>
		<div class="container">
			<div class="footer">
				Copyright © <?php echo date('Y') ?>  All rights reserved &#183;
				<a href="http://gosoftware.web.id/">http://gosoftware.web.id</a> &#183; <a href="https://phpbego.wordpress.com/">https://phpbego.wordpress.com</a>
			</div>
		</div>
	</footer>

	<script src="<?php echo URL; ?>/layout/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>