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

namespace App;
use PDO;

class Controller {

	protected $db;

	public function __construct()
	{

        if (session_id() == "") {
            session_start();
        }

		try {
			$this->db = new PDO("sqlite:" . ROOT . "db/db.sqlite3");
		} catch (PDOException $e) {
			die ("Database tidak terhubung!");
		}
	}
}