<?php

namespace App\Controllers;

class Registrar extends BaseController
{
	public function index()
	{
		return view('registrar/signin');
	}

	public function auth($page = NULL) {
		if($page === NULL) {
			return view('registrar/signin');
		}

		return view('registrar/'.$page);
	}
}
