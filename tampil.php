<?php 

/*
 * Koneksi Database
 */
include "koneksi.php";

/*
 * Tampilkan data Prodi pada Form
 */
$sql = "SELECT tb_mhsw.*, tb_prodi.prodi_nama AS PRD
		FROM tb_mhsw, tb_prodi WHERE tb_mhsw.mhsw_id_prodi=tb_prodi.prodi_id";
$stmt = $koneksi->prepare($sql);
$stmt->execute();

/*
 * Hapus data
 */

if (isset($_GET['hapus'])) {
	$sth = $koneksi->prepare("DELETE FROM tb_mhsw WHERE mhsw_id = ?");
	$sth->bindValue(1, $_GET['hapus']);
	$sth->execute();

	header("location:tampil.php");
}

?>

<h2>Daftar Mahasiswa</h2>
<a href="input.php">Tambah Baru</a>

<table>
	<tr>
		<th>ID</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PRODI</th>
		<th>AKSI</th>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
		<tr>
			<td><?php echo $row['mhsw_id']; ?></td>
			<td><?php echo $row['mhsw_nim']; ?></td>
			<td><?php echo $row['mhsw_nama']; ?></td>
			<td><?php echo $row['PRD']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['mhsw_id']; ?>">Edit</a>
				<a href="tampil.php?hapus=<?php echo $row['mhsw_id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
			</td>
		</tr>
	<?php } ?>
</table>