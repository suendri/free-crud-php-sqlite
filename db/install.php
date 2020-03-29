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

final class Install {

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("sqlite:db.sqlite3");

		} catch (PDOException $e) {
			die ("Error! " . $e->getMessage());
		}
	}

	public function run() {

		try {

			$tb_site = "CREATE TABLE IF NOT EXISTS tb_mhsw (
					mhsw_id INTEGER NOT NULL,
					mhsw_nim TEXT NOT NULL,
					mhsw_nama TEXT NOT NULL,
					mhsw_alamat TEXT NOT NULL,
					created_at TEXT DEFAULT '0000-00-00',
					updated_at TEXT DEFAULT '0000-00-00',
					PRIMARY KEY (mhsw_id),
					UNIQUE (mhsw_nim))";
			$this->db->exec($tb_site);			

			$tb_data = "INSERT INTO tb_site VALUES (1, '')";
			$this->db->exec($tb_data);

		} catch (Exception $e) {
			die ("Error ! " . $e->getMessage());
		}
	}

}

$app = new Install();
$app->run();

echo "Database berhasil dipasang, sistem berjalan pada server minimum PHP 7.4.0, versi anda saat ini adalah " . phpversion();