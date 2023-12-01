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

class Login extends Controller
{

     public object $model;

     public function __construct()
     {

          $this->model = new \App\Models\Login();
     }

     public function index()
     {
          $this->guest('login/index');
     }

     public function proses()
     {
          $row = $this->model->proses();

          if (!empty($row)) {
               $_SESSION['login'] = true;
               $_SESSION['user_full_name'] = $row['user_full_name'];
               header('location:' . URL . '/dashboard');
          } else {
               $_SESSION['login'] = false;
               header('location:' . URL);
          }
     }
}
