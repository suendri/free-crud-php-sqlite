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
$row = $user->edit($id);
?>

<h2>EDIT USER</h2>
<form method="POST" action="<?php echo URL; ?>/user_proses.php">
	<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
	<div class="form-group row">
		<label class="col-sm-2">USERNAME</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="user_name" value="<?php echo $row['user_name']; ?>" placeholder="Username" required="" autocomplete="off">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">PASSWORD</label>
		<div class="col-sm-10">
			<input class="form-control" type="password" name="user_password" placeholder="Password" autocomplete="off">
			<small class="text-muted">Kosongkan jika tidak ingin merubah password</small>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">ROLE</label>
		<div class="col-sm-10">
			<select class="form-control" name="user_role">
				<option value="administrator"<?php echo $row['user_role'] == "administrator" ? " selected" : ""; ?>>Administrator</option>
				<option value="mahasiswa"<?php echo $row['user_role'] == "mahasiswa" ? " selected" : ""; ?>>Mahasiswa</option>
			</select>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/user" class="btn btn-primary">KEMBALI</a>
		<input class="btn btn-success" type="submit" name="update" value="UPDATE">
	</div>	
</form>