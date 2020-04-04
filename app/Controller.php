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

namespace App;
use PDO;

class Controller {

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("sqlite:" . ROOT . "db/db.sqlite3");
			
		} catch (PDOException $e) {
			die ("Error ! " . $e->getMessage());
		}
	}
}