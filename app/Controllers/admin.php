<?php namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{

	public function index() {

        return view('home');
    }

    public function adminSpace() {

        return view("admin-space");
    }
    

    public function mailto() {

        $email = \Config\Services::email();

        $email->setFrom($_POST['username'], $_POST['usermail']);
        $email->setTo('simon.morvant@yahoo.com');
        //$email->setCC('another@another-example.com');
        //$email->setBCC('them@their-example.com');

        $email->setSubject('You got a mail');
        $email->setMessage($_POST['message']);

        $email->send();


        if ($email->send()) {
            //echo 'Correo enviado';
            return view('contact');

        } else {
            echo 'Correo no enviado';
        }
           
    }

    public function membersList() {

        $model = new UsersModel();
		$data['members'] = $model->orderBy('registed_at', 'desc')
			->findAll();
        /*var_dump($data['members']);
        die();*/
		return view('members-list', $data);
    }


}

	//--------------------------------------------------------------------

