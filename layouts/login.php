<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">
	<title>Free CRUD PHP SQLite | Login</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin: 0 100px;
		}

		main {
			width: 960px;
			margin: 100px auto;
			line-height: 30px;
		}

		.error {
			background-color: #f8d7da;
			padding: 10px;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<main>
		<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
	</main>
</body>

</html>