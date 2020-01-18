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


$route = new App\Route();

$route->add('/', function() { 
	include "web_main.php";
});

$route->add('/mahasiswa', function() { 
	include "mhsw_tampil.php";
});
$route->add('/mahasiswa/input', function() { 
	include "mhsw_input.php";
});
$route->add('/mahasiswa/edit/.+', function($id) { 
	include "mhsw_edit.php";
});
$route->add('/mahasiswa/detail/.+', function($id) { 
	include "mhsw_detail.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
