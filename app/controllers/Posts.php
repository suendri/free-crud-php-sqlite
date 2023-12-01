<?php

namespace App\Controllers;

use App\Core\Controller;

class Posts extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Post();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('posts/index', $data);
     }

     public function input()
     {
          // Membuat option categories
          $data['optcat'] = $this->model->optCat();

          $this->dashboard('posts/input', $data);
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/posts');
     }

     public function edit($id)
     {
          // Menampilkan data edit
          $data['row'] = $this->model->edit($id);

          // Membuat option categories
          $data['optcat'] = $this->model->optCat();

          $this->dashboard('posts/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/posts');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/posts');
     }
}
