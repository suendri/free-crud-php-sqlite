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

$route->add('/user', function() { 
	include "user_tampil.php";
});
$route->add('/user/input', function() { 
	include "user_input.php";
});
$route->add('/user/edit/.+', function($id) { 
	include "user_edit.php";
});
$route->add('/akun', function() { 
	include "user_akun.php";
});

$route->add('/login', function() { 
	include "web_login.php";
});
$route->add('/logout', function() { 
	include "web_logout.php";
});

$route->add('/about', function() { 
	include "web_about.php";
});

/*$route->add('/profil/.+', function($name) {
	echo "Name $name";
});*/

$route->listen();
