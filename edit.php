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
 * Ambil data id dari tampil
 */
$id = $_GET['id'];

/*
 * Tampilkan data Mahasiswa pada Form
 */
$sql_2 = "SELECT * FROM tb_mhsw WHERE mhsw_id = ?";
$stmt_2 = $koneksi->prepare($sql_2);
$stmt_2->bindValue(1, $id);
$stmt_2->execute();
$result = $stmt_2->fetch();

/*
 * Eksekusi saat tombol simpan di klik
 */
if (isset($_POST['t_simpan'])) {

	$sql_3 = "UPDATE tb_mhsw SET 
			mhsw_nim=:mhsw_nim, 
			mhsw_nama=:mhsw_nama, 
			mhsw_id_prodi=:mhsw_id_prodi
			WHERE mhsw_id=:mhsw_id";

	$stmt_3 = $koneksi->prepare($sql_3);
	$stmt_3->bindParam(":mhsw_nim", $_POST['i_nim']);
	$stmt_3->bindParam(":mhsw_nama", $_POST['i_nama']);
	$stmt_3->bindParam(":mhsw_id_prodi", $_POST['i_prodi']);
	$stmt_3->bindParam(":mhsw_id", $id);
	$stmt_3->execute();	

	header("location:tampil.php");
}

?>

<h2>Edit Data Mahasiswa</h2>
<form action="" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="i_nim" value="<?php echo $result['mhsw_nim']; ?>" autofocus=""></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="i_nama" value="<?php echo $result['mhsw_nama']; ?>"></td>
		</tr>
		<tr>
			<td>PRODI</td>
			<td>
				<select name="i_prodi">
					<?php while ($row = $stmt_1->fetch()) { ?>
						<option value="<?php echo $row['prodi_id']; ?>" <?php echo $row['prodi_id'] == $result['mhsw_id_prodi'] ? " selected" : ""; ?>><?php echo $row['prodi_nama']; ?></option>
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