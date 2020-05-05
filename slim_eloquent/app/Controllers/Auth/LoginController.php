<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller {

    public function create( $request, $response)
    {
        return $this->view->render($response, 'auth/login.tpl');
    }

    public function check($request, $response)
    {
        $email = $request->getParam('email');

        $user = new User;
        $user = User::where('email' , $email)->first();
        $password = $request->getParam('password');

        //var_dump($user->id);
        //die();

        if ($user === null)
        {
            return $response->withRedirect($this->router->pathFor('auth.login'));
        } else {
            $validpass = password_verify($password, $user->password);

            if ($validpass)
            {
                if ($user->role_id == 2)
                {
                    $_SESSION['user'] = $user->id;
                    return $this->view->render($response, 'admin/dashboard.tpl');
                } else {
                    //$_SESSION['user'] = $user;
                    return $response->withRedirect($this->router->pathFor('user.dashboard'));
                    //return $this->view->render($response, 'users/dashboard.tpl', compact('user'));
                }
            } else {
                return $response->withRedirect($this->router->pathFor('auth.login'));
            }
        }
    }
}