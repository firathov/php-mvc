<?php

    namespace App\Controllers;

    use App\Models\User;
    use \Core\View;

    Class Login extends \Core\Controller
    {
        public function loginAction()
        {
            if(isset($_POST['autho']))
            {
                $autho = $_POST['autho'];
                $login = $autho[0];
                $pass = $autho[1];
                $author = User::getOne($login);
            }
            View::renderTemplate('Login/login.html', ['login' => $login, 'pass' => $pass]);
        }
    }
