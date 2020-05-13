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

			$tb_mhsw = "CREATE TABLE IF NOT EXISTS tb_mhsw (
				mhsw_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
				mhsw_nim TEXT NOT NULL UNIQUE,
				mhsw_nama TEXT NOT NULL,
				mhsw_alamat TEXT NOT NULL,
				created_at TEXT DEFAULT '0000-00-00',
				updated_at TEXT DEFAULT '0000-00-00')";

			$tb_user = "CREATE TABLE IF NOT EXISTS tb_users (
				user_id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
				user_name TEXT NOT NULL UNIQUE,
				user_password TEXT NOT NULL,
				user_role TEXT NOT NULL DEFAULT 'mahasiswa',
				created_at TEXT DEFAULT '0000-00-00',
				updated_at TEXT DEFAULT '0000-00-00')";


			if ($this->db->query($tb_mhsw) AND $this->db->query($tb_user)) {
				echo "Database berhasil dipasang, sistem berjalan pada server minimum PHP 7.4.0, versi anda saat ini adalah " . phpversion();
			} else {
				echo "Database gagal dipasang, sistem berjalan pada server minimum PHP 7.4.0, versi anda saat ini adalah " . phpversion();
			}

			 /*
			 * Tambahkan Data User (Opsional)
			 */
			$password = password_hash('admin', PASSWORD_DEFAULT);
			$dt_user = "INSERT INTO tb_users (user_name, user_password, user_role) 
			VALUES ('admin', '$password', 'administrator')";
			$this->db->exec($dt_user);


		} catch (Exception $e) {
			die ("Error ! " . $e->getMessage());
		}
	}

}

$app = new Install();
$app->run();