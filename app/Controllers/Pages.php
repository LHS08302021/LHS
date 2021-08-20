<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('registrar/signin');
	}

	public function view($page = NULL) {
		if($page === NULL) {
			echo view('registrar/home');
		}

    echo view('templates/header');
    echo view('templates/sidebar');
		echo view('templates/topbar');
		echo view('registrar/'.$page);
    echo view('templates/footer');
	}
}
