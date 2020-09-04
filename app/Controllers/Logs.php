<?php namespace App\Controllers;

class Logs extends BaseController
{
	public function index()
	{
		return view('index');
    }
    
    public function adminLog()
    {
        return view('admin-log');
    }

    public function adminSpace()
    {
        return view('admin-space');
    }

	//--------------------------------------------------------------------

}