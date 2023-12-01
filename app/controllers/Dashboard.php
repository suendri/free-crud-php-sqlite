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

class Dashboard extends Controller
{
	public function __construct()
	{
		parent::cekLogin();
	}

	public function index()
	{
		$this->dashboard('dashboard/index');
	}

	public function logout()
	{
		session_destroy();
		header('location:' . URL);
	}
}
