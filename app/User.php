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

namespace App;
use Carbon\Carbon;

class User extends Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function tampil()
	{

		$stmt = $this->db->prepare("SELECT * FROM tb_users ORDER BY user_name");
		$stmt->execute();

		$data = array();
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;

	}

	public function input()
	{
		
		$user_name = $_POST['user_name'];
		$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
		$user_role = $_POST['user_role'];

		if (!empty($user_name) AND !empty($user_password)) {

			$sql = "INSERT INTO tb_users (user_name, user_password, user_role) 
			VALUES (:user_name, :user_password, :user_role)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":user_name", $user_name);
			$stmt->bindParam(":user_password", $user_password);
			$stmt->bindParam(":user_role", $user_role);
			$stmt->execute();
		} 

		return false;
	}

	public function edit($id)
	{

		$stmt = $this->db->prepare("SELECT * FROM tb_users WHERE user_id=:user_id");
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();

		$row = $stmt->fetch(); 

		return $row;

	}

	public function update()
	{
		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];
		$user_role = $_POST['user_role'];

		if (!empty($user_name)) {

			if (!empty($_POST['user_password'])) {
				$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
				$sql = "UPDATE tb_users SET user_name=:user_name, user_password=:user_password, user_role=:user_role WHERE user_id=:user_id";
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(":user_id", $user_id);
				$stmt->bindParam(":user_name", $user_name);
				$stmt->bindParam(":user_password", $user_password);
				$stmt->bindParam(":user_role", $user_role);
				$stmt->execute();
			} else {
				$sql = "UPDATE tb_users SET user_name=:user_name, user_role=:user_role WHERE user_id=:user_id";
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(":user_id", $user_id);
				$stmt->bindParam(":user_name", $user_name);
				$stmt->bindParam(":user_role", $user_role);
				$stmt->execute();
			}
		} 

		return false;
	}

	public function login()
	{

		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

		$stmt = $this->db->prepare("SELECT * FROM tb_users WHERE user_name=:user_name");
		$stmt->bindParam(":user_name", $user_name);
		$stmt->execute();

		$row = $stmt->fetch();

		if (!empty($row) AND password_verify($user_password, $row['user_password'])) {

			$_SESSION['login']  = true;
			$_SESSION['user_id']  = $row['user_id'];
			$_SESSION['user_name']  = $row['user_name'];
			$_SESSION['user_role'] = $row['user_role'];
		} else {
			$_SESSION['login_error'] = "Login tidak ditemukan!";
		}

		return false;
	}

	public function akun()
	{
		$id = $_SESSION['user_id'];

		$stmt = $this->db->prepare("SELECT * FROM tb_users WHERE user_id=:user_id");
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();

		$row = $stmt->fetch(); 

		return $row;

	}

	public function akunUpdate()
	{
		$user_id = $_POST['user_id'];
		$user_name = $_POST['user_name'];

		if (!empty($user_name)) {

			if (!empty($_POST['user_password'])) {
				$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
				$sql = "UPDATE tb_users SET user_name=:user_name, user_password=:user_password WHERE user_id=:user_id";
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(":user_id", $user_id);
				$stmt->bindParam(":user_name", $user_name);
				$stmt->bindParam(":user_password", $user_password);
				$stmt->execute();
			} else {
				$sql = "UPDATE tb_users SET user_name=:user_name WHERE user_id=:user_id";
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(":user_id", $user_id);
				$stmt->bindParam(":user_name", $user_name);
				$stmt->execute();
			}
		} 

		return false;
	}


}
