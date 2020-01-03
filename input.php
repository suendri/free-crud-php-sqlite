<?php 

/*
 * Koneksi Database
 */
include "koneksi.php";

/*
 * Tampilkan data Prodi pada Form
 */
$sql_1 = "SELECT * FROM tb_prodi";
$stmt_1 = $koneksi->prepare($sql_1);
$stmt_1->execute();

/*
 * Eksekusi saat tombol simpan di klik
 */
if (isset($_POST['t_simpan'])) {

	$sql_2 = "INSERT INTO tb_mhsw (mhsw_id, mhsw_nim, mhsw_nama, mhsw_id_prodi)
			VALUES (NULL, :mhsw_nim, :mhsw_nama, :mhsw_id_prodi)";

	$stmt_2 = $koneksi->prepare($sql_2);
	$stmt_2->bindParam(":mhsw_nim", $_POST['i_nim']);
	$stmt_2->bindParam(":mhsw_nama", $_POST['i_nama']);
	$stmt_2->bindParam(":mhsw_id_prodi", $_POST['i_prodi']);
	$stmt_2->execute();	

	header("location:tampil.php");
}

?>

<h2>Tambah Data Mahasiswa</h2>
<form action="" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="i_nim" autofocus=""></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="i_nama"></td>
		</tr>
		<tr>
			<td>PRODI</td>
			<td>
				<select name="i_prodi">
					<?php while ($row = $stmt_1->fetch()) { ?>
						<option value="<?php echo $row['prodi_id']; ?>"><?php echo $row['prodi_nama']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="t_simpan"></td>
		</tr>
	</table>
</form>