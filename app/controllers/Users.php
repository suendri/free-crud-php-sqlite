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

class Users extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\User();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('users/index', $data);
	}

	public function input()
	{
		$this->dashboard('users/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/users');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('users/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/users');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/users');
	}
}
