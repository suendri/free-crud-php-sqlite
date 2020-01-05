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
 * Tampilkan data Prodi pada Form
 */
$sql = "SELECT tb_mhsw.*, tb_user.user_name AS USR
FROM tb_mhsw, tb_user WHERE tb_mhsw.mhsw_id_user=tb_user.user_id";
$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>

<h3 class="mb-3">
	Daftar Mahasiswa 
	<div class="float-right">
		<a href="index.php?halaman=input" class="btn btn-primary">Tambah Baru</a>
	</div>
</h3>

<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>USER</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>AKSI</th>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
		<tr>
			<td><?php echo $row['mhsw_id']; ?></td>
			<td><?php echo $row['USR']; ?></td>
			<td><?php echo $row['mhsw_nim']; ?></td>
			<td><?php echo $row['mhsw_nama']; ?></td>
			<td><a href="index.php?halaman=edit&id=<?php echo $row['mhsw_id']; ?>">Edit</a></td>
		</tr>
	<?php } ?>
</table>