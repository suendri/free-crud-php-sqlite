<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2>TAMBAH MAHASISWA</h2>

<div class="mb-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo URL; ?>">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo URL; ?>/mahasiswa">Mahasiswa</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tambah</li>
		</ol>
	</nav>
</div>

<form method="POST" action="<?php echo URL; ?>/mhsw_proses.php">
	<div class="form-group row">
		<label class="col-sm-2">NIM</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="mhsw_nim" placeholder="NIM" required="" autofocus="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">NAMA</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="mhsw_nama" placeholder="Nama" required="">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-2">ALAMAT</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="mhsw_alamat" placeholder="Alamat">
		</div>
	</div>
	<div class="form-group">
		<div class="text-right">
			<a href="<?php echo URL; ?>/mahasiswa" class="btn btn-primary">KEMBALI</a>
			<input class="btn btn-success" type="submit" name="input" value="SIMPAN">
		</div>
	</div>	
</form>
