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
 * Ambil data id dari tampil
 */
$id = $_GET['id'];

/*
 * Tampilkan data Mahasiswa pada Form
 */
$sql_1 = "SELECT * FROM tb_mhsw WHERE mhsw_id = ?";
$stmt_1 = $koneksi->prepare($sql_1);
$stmt_1->bindValue(1, $id);
$stmt_1->execute();
$result = $stmt_1->fetch();

/*
 * Eksekusi saat tombol simpan di klik
 */
if (isset($_POST['t_simpan'])) {

	$sql_2 = "UPDATE tb_mhsw SET 
			mhsw_nim=:mhsw_nim, 
			mhsw_nama=:mhsw_nama
			WHERE mhsw_id=:mhsw_id";

	$stmt_2 = $koneksi->prepare($sql_2);
	$stmt_2->bindParam(":mhsw_nim", $_POST['i_nim']);
	$stmt_2->bindParam(":mhsw_nama", $_POST['i_nama']);
	$stmt_2->bindParam(":mhsw_id", $id);
	$stmt_2->execute();	

	header("location:tampil.php");
}

?>

<h3 class="mb-3">
	Edit Data Mahasiswa 
</h3>

<form class="card" action="" method="POST">
	<div class="card-body">
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="i_nim" class="form-control" value="<?php echo $result['mhsw_nim']; ?>" autofocus="" required="">
		</div>
		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="i_nama" class="form-control" value="<?php echo $result['mhsw_nama']; ?>" required="">
		</div>
	</div>
	<div class="card-footer">
		<div class="float-right">
			<a href="index.php" class="btn btn-danger">KEMBALI</a>
			<input type="submit" name="t_simpan" class="btn btn-primary" value="UPDATE">
		</div>
	</div>
</form>