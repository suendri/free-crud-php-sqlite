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

// Error reporting
error_reporting(E_ALL);

// Session
session_start();

// Timezine
date_default_timezone_set("Asia/Bangkok");

// Basepath
define("BASEPATH", TRUE);

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Url - Silakan ubah disini
define("URL", "http://localhost/free-crud-php-sqlite");

// Autoload
require_once ROOT . "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
