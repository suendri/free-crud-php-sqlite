<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row mt-3">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">Login</div>

			<div class="card-body">
				<form method="POST" action="<?php echo URL; ?>/user_proses.php">
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">Username</label>

						<div class="col-md-6">
							<input type="text" class="form-control" name="user_name" required autocomplete="off" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

						<div class="col-md-6">
							<input type="password" class="form-control" name="user_password" required autocomplete="off">
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
							<button type="submit" class="btn btn-primary" name="login">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>