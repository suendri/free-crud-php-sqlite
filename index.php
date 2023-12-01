<?php

// Laporan error
error_reporting(E_ALL);

// Autoload
require_once __DIR__ . "/vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

new App\Config();
new App\Core\Bootstrap();