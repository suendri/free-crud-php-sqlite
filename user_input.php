<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2>TAMBAH USER</h2>
<form method="POST" action="<?php echo URL; ?>/user_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">USERNAME</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="user_name" placeholder="Username" required="" autocomplete="off">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">PASSWORD</label>
		<div class="col-sm-10">
			<input class="form-control" type="password" name="user_password" placeholder="Password" required="" autocomplete="off">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">ROLE</label>
		<div class="col-sm-10">
			<select class="form-control" name="user_role">
				<option value="administrator">Administrator</option>
				<option value="mahasiswa">Mahasiswa</option>
			</select>
		</div>
	</div>
	<div class="form-group float-right">
		<a href="<?php echo URL; ?>/user" class="btn btn-primary">KEMBALI</a>
		<input class="btn btn-success" type="submit" name="input" value="SIMPAN">
	</div>
	
</form>
