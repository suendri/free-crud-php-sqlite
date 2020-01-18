<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="sistem,crud,php,sqlite,phpbego,gosoftware">
	<meta name="description" content="CRUD PHP SQLite">
	<meta name="author" content="Suendri">

	<title>CRUD PHP SQLite</title>
	<link href="<?php echo URL; ?>/layout/assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/datatables.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/layout/assets/css/style.css">

	<script src="<?php echo URL; ?>/layout/assets/js/jquery-3.4.1.min.js"></script>
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
	<div class="container">
		<header>
			<div class="row">
				<div class="col">
					<img src="<?php echo URL; ?>/layout/assets/images/header.jpg" class="img-fluid w-100">
				</div>
			</div>
		</header>

		<section>
			<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A00443;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo URL; ?>">Home</a>
						</li>						
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/mahasiswa">Mahasiswa</a>
							</li>
					</ul>
					<span class="navbar-text font-weight-bold">
						Admin
					</span>
				</div>
			</nav>
		</section>

		<main>
			<div class="row my-2">			
				<div class="col">
					<?php require_once "inc/router.php"; ?>
				</div>
			</div>
		</main>

		<footer>
			Copyright &copy; 2020 - <a href="http://gosoftware.web.id/">http://gosoftware.web.id</a> - <a href="https://phpbego.wordpress.com/">https://phpbego.wordpress.com</a>
		</footer>

	</div>
	<script src="<?php echo URL; ?>/layout/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>