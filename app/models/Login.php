<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
     public function proses()
     {
          $email = $_POST['email'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM tb_users WHERE user_email=:user_email LIMIT 1";
          $stmt = $this->db->prepare($sql);
          $stmt->bindParam(":user_email", $email);
          $stmt->execute();

          $row = $stmt->fetch();

          if (password_verify($password, $row['user_password'])) {
               return $row;
          }
     }
}
