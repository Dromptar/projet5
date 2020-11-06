<?php namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{

	public function index() {
		return view('index');
    }
    

    public function adminSpace() {
        
        return view('admin-space');
    }

}

	//--------------------------------------------------------------------

