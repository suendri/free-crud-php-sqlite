<?php 

/**
 * Gosoftware Media Indonesia 2019
 * --
 * --
 * Gosoftware Media Abadi
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

/*
 * No Direct
 */
if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
} 

/*
 * Koneksi Database
 */
$dbfile = "db/database.sqlite3";
$koneksi = new PDO("sqlite:" . $dbfile . "");
