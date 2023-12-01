<?php

/**
 * https://github.com/suendri
 * --
 * e-mail : suendri@gmail.com
 * WA     : 62852-6361-6901
 * --
 */

namespace App\Controllers;

use App\Core\Controller;

class Categories extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Category();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('categories/index', $data);
     }

     public function input()
     {
          $this->dashboard('categories/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/categories');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('categories/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/categories');
     }
}
