<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller {

    public function create($request, $response)
    {
        return $this->view->render($response, 'auth/register.tpl');
    }

    public function store($request, $response)
    {
        $user = new User;

        $user->firstname = $request->getParam('firstname');
        $user->lastname = $request->getParam('lastname');
        $user->email = $request->getPAram('email');
        $user->password = password_hash($request->getParam('password'), PASSWORD_DEFAULT);

        $user->save();

        return $response->withRedirect($this->router->pathFor('auth.login'));
    }
}