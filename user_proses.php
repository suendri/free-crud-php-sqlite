<?php 

/**
 * Gosoftware Media Indonesia 2020
 * --
 * --
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

// Config
require_once "inc/config.php";

$user = new App\User();

if (isset($_POST['input'])) {

	$user->input();
	header("location:" . URL . "/user");
}

if (isset($_POST['update'])) {

	$user->update();
	header("location:" . URL . "/user");
}

if (isset($_POST['login'])) {

	$user->login();
	header("location:" . URL . "/");
}


if (isset($_POST['akunUpdate'])) {

	$user->akunUpdate();
	header("location:" . URL . "/akun");
}