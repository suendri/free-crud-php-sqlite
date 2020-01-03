<?php 

error_reporting(E_ALL);

/*
 * Koneksi Database
 */
$dbfile = "db/database.sqlite3";
$koneksi = new PDO("sqlite:" . $dbfile . "");

/*
 * Aktifkan Foreign key
 * $koneksi->exec('PRAGMA foreign_keys = ON;');
 */

/*
 * Buat database Prodi jika belum ada
 */
$tb_prodi = "CREATE TABLE IF NOT EXISTS tb_prodi (
			prodi_id INTEGER NOT NULL,
			prodi_kode TEXT NOT NULL,
			prodi_nama TEXT NOT NULL,
			PRIMARY KEY(prodi_id),
			UNIQUE (prodi_kode))";
$koneksi->exec($tb_prodi);

/*
 * Tambahkan data Prodi (Opsional)
 */
$dt_prodi = "INSERT INTO tb_prodi VALUES 
			(NULL, 'SI', 'Sistem Informasi'),
			(NULL, 'ILKOM', 'Ilmu Komputer'),
			(NULL, 'MM', 'Matematika'),
			(NULL, 'FIS', 'Fisika'),
			(NULL, 'BIO', 'Biologi')";
$koneksi->exec($dt_prodi);

/*
 * Buat database Mahasiswa jika belum ada
 */
$tb_mhsw = "CREATE TABLE IF NOT EXISTS tb_mhsw (
			mhsw_id INTEGER NOT NULL,
			mhsw_nim TEXT NOT NULL,
			mhsw_nama TEXT NOT NULL,
			mhsw_id_prodi INTEGER NOT NULL,
			PRIMARY KEY (mhsw_id),
			UNIQUE (mhsw_nim),
			FOREIGN KEY (mhsw_id_prodi) REFERENCES tb_prodi(prodi_id) ON UPDATE CASCADE ON DELETE RESTRICT)";
$koneksi->exec($tb_mhsw);