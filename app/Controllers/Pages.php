<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('registrar/signin');
	}

	public function view($page = NULL) {
		helper('form');
		if($page === NULL) {
			echo view('registrar/home');
		}

    echo view('registrar/templates/header');
    echo view('registrar/templates/sidebar');
		echo view('registrar/templates/topbar');
		echo view('registrar/'.$page);
    echo view('registrar/templates/footer');
	}
}