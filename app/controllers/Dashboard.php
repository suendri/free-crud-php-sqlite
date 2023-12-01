<?php

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
