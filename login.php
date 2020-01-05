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
 * Eksekusi
 */
if (isset($_POST['t_login']))
{

	$u_name = htmlentities($_POST['i_name']);
	$u_pass = htmlentities($_POST['i_pass']);

	$sql = "SELECT * FROM tb_user WHERE user_name = :user_name";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":user_name", $u_name);
	$stmt->execute();
	$result = $stmt->fetch();

	if (password_verify($u_pass, $result['user_pass']))
	{
		$_SESSION['user_id'] = $result['user_id'];
		$_SESSION['user_name'] = $result['user_name'];
		header("location:index.php");
	} else {
		sleep(5);
		header("location:index.php");
	}
}

?>
<div class="row">
	<div class="col-md-4 mx-auto">
		<form action="" method="POST">
			<div class="card my-3">
				<div class="card-header">
					<label><strong>Login</strong></label>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="i_name" class="form-control" required="" maxlength="15" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="i_pass" class="form-control" required="" maxlength="15" placeholder="Password">
					</div>								
				</div>
				<div class="card-footer">
					<div class="d-flex float-right">
						<input type="submit" name="t_login" value="Login" class="btn btn-primary">
					</div>	
				</div>
			</div>
		</form>
	</div>
</div>