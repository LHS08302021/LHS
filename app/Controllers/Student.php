<?php

namespace App\Controllers;

class Student extends BaseController
{
	public function index()
	{
		return view('registrar/signin');
	}

	public function view($page = NULL) {
		helper('form');
		if($page === NULL) {
			echo view('student/home');
		}

		echo view('student/'.$page);
	}
}