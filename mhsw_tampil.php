<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

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

$mhsw = new App\Mahasiswa();
$rows = $mhsw->tampil();

?>

<h2>
	DATA MAHASISWA
	<a class="btn btn-primary btn-sm float-right" href="<?php echo URL; ?>/mahasiswa/input">
		<i class="fa fa-plus"></i> Tambah
	</a>
</h2>
<table class="table table-bordered table-sm" id="dtb">
	<thead>
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($rows as $row) { $no++; ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['mhsw_nim']; ?></td>
				<td><?php echo $row['mhsw_nama']; ?></td>
				<td>
					<a href="<?php echo URL; ?>/mahasiswa/edit/<?php echo $row['mhsw_id']; ?>" class="btn btn-sm btn-warning">
						<i class="fa fa-edit"></i> Edit
					</a>
					<a href="<?php echo URL; ?>/mahasiswa/detail/<?php echo $row['mhsw_id']; ?>" class="btn btn-sm btn-info">
						<i class="fa fa-info-circle"></i> Detail
					</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
