<?php

namespace App\Models;

use App\Core\Model;

class Category extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_categories";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $cat_name = $_POST['cat_name'];

          $sql = "INSERT INTO tb_categories (cat_name)
            VALUES (:cat_name)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":cat_name", $cat_name);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_categories WHERE cat_id=:cat_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":cat_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $cat_name = $_POST['cat_name'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_categories
          SET cat_name=:cat_name WHERE cat_id=:cat_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":cat_name", $cat_name);
          $stmt->bindParam(":cat_id", $id);

          $stmt->execute();
     }
}
