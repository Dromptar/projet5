<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Logs extends BaseController
{

    public function index()
    {
        return view('index');
    }

    public function registForm()
    {
        return view('register');
    }

    public function connectForm()
    {
        return view('connection');
    }


    public function register()
    {

        $isInputCorrect = (($this->request->getMethod() == 'post') &&
            !empty($_POST['username'] && htmlspecialchars($_POST['username'])) &&
            !empty($_POST['pass']) && !empty($_POST['pass_confirmed']) &&
            isset($_POST['email']) && htmlspecialchars($_POST['email']));

        if ($isInputCorrect) {

            $model = new UsersModel();
            $notAvailable = $model->where('username', $_POST['username'])->first();
            /*var_dump($isAvailable);
            die();
            */
            if ($notAvailable) {
                echo "<script>alert(\"'Pseudonyme et/ou email déjà utilisé.\")</script>";
                return view('register');
            }


            if (!empty($_POST['pass'] && htmlspecialchars($_POST['pass']) &&
                ($_POST['pass'] == $_POST['pass_confirmed']) &&
                (!empty($_POST['email'])) && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))) {

                $model = new UsersModel();

                $user = new \App\Entities\User();
                $user->username = $_POST['username'];
                $user->pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $user->email = $_POST['email'];
                $model->save($user);

                // go to a success page
            } else {
                echo "<script>alert(\"Les mots de passes ne correspondent pas et/ou l\'adresse mail n\'est pas valide.\")</script>";
                return view('register');
            }
        } else {
            echo "<script>alert(\"Veuillez remplir tous les champs.\")</script>";
            return view('register');
        }
    }

    public function connection()
    {

        if (($this->request->getMethod() == 'post') &&
            !empty($_POST['username'] && htmlspecialchars($_POST['username'])) &&
            !empty($_POST['pass'] && htmlspecialchars($_POST['pass']))
        ) {

            $model = new UsersModel();
            $userName = $model->where('username', $_POST['username'])->first();
            
                    
            
            if (!$userName OR !password_verify($_POST['pass'], $userName->pass)) {

                echo "<script>alert(\"Nombre o contraseña incorrecta.\")</script>";
                return view('connection');
    
            }else if ($userName->is_admin) {

                $isAdmin = $userName->is_admin;
                $userId = $userName->user_id;
                $_SESSION['id'] = $userId;
                $_SESSION['admin'] = $isAdmin;
                $_SESSION['userSession'] = $_POST['username'];
              
                return view('admin-space');

            } else {

                echo "<script>alert(\"Bienvenido en tu espacio!\")</script>";

                $userId = $userName->user_id;
                $isAdmin = $userName->is_admin;
                $_SESSION['admin'] = $isAdmin;
                $_SESSION['id'] = $userId;
                $_SESSION['userSession'] = $_POST['username'];
                
                return view('tips');
            }
        }
    }

    function disconnection() {

        // Suppression des variables de session et de la session
        $_SESSION = array();
        session_destroy();
        return redirect()->to('/connectForm');
    }
}
    //----------------------------------------------------------------//


