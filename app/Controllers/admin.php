<?php namespace App\Controllers;

use App\Models\UsersModel;

class Logs extends BaseController
{

	public function index() {
		return view('index');
    }
    
    public function adminLog() {
        return view('admin-log');
    }

    public function adminSpace() {
        return view('admin-space');
    }

    

    /*public function register() {
            
        if(($this->request->getMethod() == 'post') &&
		!empty($_POST['username'] && htmlspecialchars($_POST['username'])) &&
        !empty($_POST['pass'] && htmlspecialchars($_POST['pass']) && ($_POST['pass'] == $_POST['pass_confirmed']))  &&
		!empty($_POST['email'] && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))) {
        
        $model = new UsersModel();
        
        $user = new \App\Entities\User();
        $user->username = $_POST['username'];
        $user->pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $user->email = $_POST['email'];
        $user->phone = $_POST['phone'];
        $model->save($user);

            // go to a success page
        }
        
    }

    public function connection() {

        if(($this->request->getMethod() == 'post') &&
		!empty($_POST['username'] && htmlspecialchars($_POST['username'])) &&
        !empty($_POST['pass'] && htmlspecialchars($_POST['pass']))) {


        $model = new UsersModel();
        $score = $model->where('username',$_POST['username'])->first();
        $isPasswordCorrect = password_verify($_POST['pass'], $score->pass);

        if (!$isPasswordCorrect) {
               
            echo "<script>alert(\"Nombre o contraseña incorrecta.\")</script>";
            return view('connection');
            
        }
            else {

                echo "<script>alert(\"Bienvenido en tu espacio!\")</script>";
                return view('tips');
            }

    }*/

}

	//--------------------------------------------------------------------

