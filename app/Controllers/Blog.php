<?php namespace App\Controllers;

class Blog extends BaseController
{
	public function index()
	{

		$posts = 'Bonjour';
	

	}

	public function post(){

		return view('single_post');
	}

	
}
