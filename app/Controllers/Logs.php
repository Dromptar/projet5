<?php namespace App\Controllers;

use App\Models\MembersModel;

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

    public function register()
    {
            
        if ($this->request->getMethod() == 'post') {
        
        $model = new MembersModel();
        $model->save($_POST);

        }
        
    }

    $pass_hached = password_hash($_POST['pass'], PASSWORD_DEFAULT);

	//--------------------------------------------------------------------

}