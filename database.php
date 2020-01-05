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

include "koneksi.php";

/*
 * Aktifkan Foreign key
 * $koneksi->exec('PRAGMA foreign_keys = ON;');
 */

/*
 * Buat Tabel User jika belum ada
 */
$tb_user = "CREATE TABLE IF NOT EXISTS tb_user (
			user_id INTEGER NOT NULL,
			user_name TEXT NOT NULL,
			user_pass TEXT NOT NULL,
			PRIMARY KEY(user_id),
			UNIQUE (user_name))";
$koneksi->exec($tb_user);

/*
 * Buat Tabel Mahasiswa jika belum ada
 */
$tb_mhsw = "CREATE TABLE IF NOT EXISTS tb_mhsw (
			mhsw_id INTEGER NOT NULL,
			mhsw_id_user INTEGER NOT NULL,
			mhsw_nim TEXT NOT NULL,
			mhsw_nama TEXT NOT NULL,
			PRIMARY KEY (mhsw_id),
			UNIQUE (mhsw_nim),
			FOREIGN KEY (mhsw_id_user) REFERENCES tb_user(user_id) ON UPDATE CASCADE ON DELETE RESTRICT)";
$koneksi->exec($tb_mhsw);

/*
 * Tambahkan Data User (Opsional)
 */
$password = password_hash('admin', PASSWORD_DEFAULT);
$dt_user = "INSERT INTO tb_user VALUES 
			(NULL, 'admin', '$password')";
$koneksi->exec($dt_user);