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

        $email = \Config\Services::email();

        $email->setFrom('visitor@mail.com', 'Your Name');
        $email->setTo('simon.morvant@yahoo.com');
        //$email->setCC('another@another-example.com');
        //$email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();


        if ($email->send()) {
            //echo 'Correo enviado';
            return view('contact');

        } else {
            echo 'Correo no enviado';
        }
           
    }

}

	//--------------------------------------------------------------------

