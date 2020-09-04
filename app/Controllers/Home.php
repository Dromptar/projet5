<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function blog()
	{
		var_dump('bonjour');
		/**return view('blog');*/
	}

	public function tips()
	{
		return view('tips');
	}

	public function gallery()
	{
		return view('gallery');
	}

	public function contact()
	{
		return view('contact');
	}
	

}
