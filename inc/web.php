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

$route = new App\Router();

$route->add('/', function() { 
	include "web_home.php";
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

$route->add('/about', function() { 
	include "web_about.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
