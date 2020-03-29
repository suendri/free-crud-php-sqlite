<?php 

/**
 * Gosoftware Media Indonesia 2020
 * --
 * --
 * http://gosoftware.web.id
 * http://phpbego.wordpress.com
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

// Config
require_once "inc/config.php";

$mhsw = new App\Mahasiswa();

if (isset($_POST['input'])) {

	$mhsw->input();
	header("location:" . URL . "/mahasiswa");
}

if (isset($_POST['update'])) {

	$mhsw->update();
	header("location:" . URL . "/mahasiswa");
}

if (isset($_POST['delete'])) {

	$mhsw->delete();
}
