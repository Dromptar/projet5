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

    public function mailto() {

        $this->load->library('email');

        $this->email->from($_POST['email'], 'Your Name');
        $this->email->to('simon.morvant@yahoo.com');
        
        $this->email->subject('Email Test');
        $this->email->message($_POST['message']);

        $this->email->send();
    }

}

	//--------------------------------------------------------------------

