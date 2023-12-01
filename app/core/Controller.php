<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function login($view)
	{
		require_once ROOT . "layouts/login.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public static function cekLogin()
	{
		if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
			header('location:' . URL);
			exit();
		}
	}
}
