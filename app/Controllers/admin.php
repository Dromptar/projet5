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

        $mail = mail($_POST['email'], 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@monsite.fr');
        if ($mail) {
        echo '<p>Votre message a bien été envoyé.</p>';
        }
    }

}

	//--------------------------------------------------------------------

