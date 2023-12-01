<?php

/**
 * https://github.com/suendri
 * --
 * e-mail : suendri@gmail.com
 * WA     : 62852-6361-6901
 * --
 */

namespace App\Models;

use App\Core\Model;

class Post extends Model
{

     public function show()
     {
          $query = "SELECT p.*, c.* FROM tb_posts p
          INNER JOIN tb_categories c
          ON p.post_id_cat=c.cat_id ORDER BY post_id";

          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function optCat()
     {
          $query = "SELECT * FROM tb_categories";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $post_id_cat = $_POST['post_id_cat'];
          $post_title = $_POST['post_title'];
          $post_text = $_POST['post_text'];

          $sql = "INSERT INTO tb_posts (post_id_cat, post_title, post_text)
          VALUES (:post_id_cat, :post_title, :post_text)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":post_id_cat", $post_id_cat);
          $stmt->bindParam(":post_title", $post_title);
          $stmt->bindParam(":post_text", $post_text);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_posts WHERE post_id=:post_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":post_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $post_id_cat = $_POST['post_id_cat'];
          $post_title = $_POST['post_title'];
          $post_text = $_POST['post_text'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_posts
                  SET post_id_cat=:post_id_cat, post_title=:post_title, post_text=:post_text
                  WHERE post_id=:post_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":post_id_cat", $post_id_cat);
          $stmt->bindParam(":post_title", $post_title);
          $stmt->bindParam(":post_text", $post_text);
          $stmt->bindParam(":post_id", $id);

          $stmt->execute();
     }

     public function delete($id)
     {
          $sql = "DELETE FROM tb_posts WHERE post_id=:post_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":post_id", $id);
          $stmt->execute();
     }
}
