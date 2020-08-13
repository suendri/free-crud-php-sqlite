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

$user = new App\User();
$rows = $user->tampil();

?>

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo URL; ?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">User</li>
	</ol>
</nav>

<h2>
	DATA USER
	<a href="<?php echo URL; ?>/user/input" class="btn btn-primary btn-sm float-right">TAMBAH</a>
</h2>


<table class="table table-bordered table-sm" id="dtb">
	<thead>
		<tr>
			<th style="width: 20px;">NO</th>
			<th>USERNAME</th>
			<th>ROLE</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($rows as $row) { $no++;?>

			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $row['user_name']; ?></td>
				<td><?php echo $row['user_role']; ?></td>
				<td><a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>" class="btn btn-sm btn-warning">
					<i class="fa fa-edit"></i> Edit</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
