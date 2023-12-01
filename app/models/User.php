<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO tb_users (user_email, user_password, user_full_name)
            VALUES (:user_email, :user_password, :user_full_name)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password_hash);
            $stmt->bindParam(":user_full_name", $full_name);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];
            $id = $_POST['id'];

            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            if (!empty($password)) {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_password=:user_password, user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            } else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_email", $email);
            $stmt->bindParam(":user_password", $password_hash);
            $stmt->bindParam(":user_full_name", $full_name);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_users WHERE user_id=:user_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":user_id", $id);
            $stmt->execute();
      }
}
