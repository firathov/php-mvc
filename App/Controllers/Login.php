<?php

    namespace App\Controllers;

    use App\Models\User;
    use Core\Controller;
    use \Core\View;

    Class Login extends \Core\Controller
    {
        public function loginAction()
        {
            if(isset($_POST['login']))
            {
                $autho = $_POST['login'];
                $login = $autho[0];
                $pass = $autho[1];
                $autho = User::getOne($login);
            }
            View::renderTemplate('Home/login.html', ['login' => $login, 'pass' => $pass]);
        }
    }
    $output = (new Login)->loginAction();
    echo $output;