<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

/**
 * Gosoftware Media Indonesia 2020
 * --
 * --
 * http://gosoftware.web.id
 * http://phpbego.wordpress.com
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

$mhsw = new App\Mahasiswa();
$row = $mhsw->detail($id);
?>

<h2>
	DETAIL MAHASISWA
	<a href="<?php echo URL; ?>/mahasiswa" class="btn btn-primary float-right">KEMBALI</a>
</h2>


<table class="table table-striped">
	<tr>
		<th style="width: 100px;">NIM</th>
		<td><?php echo $row['mhsw_nim']; ?></td>
	</tr>
	<tr>
		<th>NAMA</th>
		<td><?php echo $row['mhsw_nama']; ?></td>
	</tr>
	<tr>
		<th>ALAMAT</th>
		<td><?php echo $row['mhsw_alamat']; ?></td>
	</tr>
</table>