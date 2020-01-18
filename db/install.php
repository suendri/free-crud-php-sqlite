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

$dbfile = "db.sqlite3";
$koneksi = new PDO("sqlite:" . $dbfile . "");

/*
 * Aktifkan Foreign key
 * $koneksi->exec('PRAGMA foreign_keys = ON;');
 */

/*
 * Buat Tabel Mahasiswa jika belum ada
 */
$tb_mhsw = "CREATE TABLE IF NOT EXISTS tb_mhsw (
			mhsw_id INTEGER NOT NULL,
			mhsw_nim TEXT NOT NULL,
			mhsw_nama TEXT NOT NULL,
			mhsw_alamat TEXT NOT NULL,
			created_at TEXT DEFAULT '0000-00-00',
			updated_at TEXT DEFAULT '0000-00-00',
			PRIMARY KEY (mhsw_id),
			UNIQUE (mhsw_nim))";
$koneksi->exec($tb_mhsw);