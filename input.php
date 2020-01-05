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

if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
} 

/*
 * Eksekusi saat tombol simpan di klik
 */
if (isset($_POST['t_simpan'])) {

	$userid = $_SESSION['user_id'];

	$sql = "INSERT INTO tb_mhsw (mhsw_id,  mhsw_id_user, mhsw_nim, mhsw_nama)
	VALUES (NULL, :mhsw_id_user, :mhsw_nim, :mhsw_nama)";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":mhsw_id_user", $userid);
	$stmt->bindParam(":mhsw_nim", $_POST['i_nim']);
	$stmt->bindParam(":mhsw_nama", $_POST['i_nama']);	
	$stmt->execute();	

	header("location:index.php");
}

?>

<h3 class="mb-3">
	Tambah Data Mahasiswa 
</h3>

<form class="card" action="" method="POST">
	<div class="card-body">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="i_nim" class="form-control" autofocus="" required="">
		</div>
		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="i_nama" class="form-control" required="">
		</div>
	</div>
	<div class="card-footer">
		<div class="float-right">
			<a href="index.php" class="btn btn-danger">KEMBALI</a>
			<input type="submit" name="t_simpan" class="btn btn-primary" value="SIMPAN">
		</div>
	</div>
</form>