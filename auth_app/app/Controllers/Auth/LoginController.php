<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class LoginController extends Controller {

    public function create($request, $response)
    {
        return $this->view->render($response, 'auth/login.tpl');
    }

    public function checkLogin($request, $response)
    {
        $email = $request->getParam('email');

        $user = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $user->bindParam(':email', $email);
        $user->execute();

        $row = $user->fetch(\PDO::FETCH_OBJ);
        $password = $request->getParam('password');


        if ($row === false){
            return $response->withRedirect($this->router->pathFor('auth.login'));
        } else {
            $validPass = password_verify($password, $row->password);
            if ($validPass) {
                if ($row->role_id == 2){
                    $_SESSION['user'] = $row->id;
                    return $this->view->render($response, 'admin/dashboard.tpl', compact('row'));
                } else {
                    $_SESSION['user'] = $row->id;
                    return $this->view->render($response, 'users/profile.tpl', compact('row'));
                }
            }
        }
    }

    public function logout($request, $response) {
        unset($_SESSION['user']);
        return $response->withRedirect($this->router->pathFor('home'));
    }
}