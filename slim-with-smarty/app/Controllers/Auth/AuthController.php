<?php
/**
 * Created by PhpStorm.
 * User: daphnedegroot
 * Date: 2019-07-01
 * Time: 13:47
 */
namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as v;

class AuthController extends Controller {

    // Register
    public function getRegister($request, $response, $args)
    {
        $nameKey = $this->csrf->getTokenNameKey();
        $valueKey = $this->csrf->getTokenValueKey();
        $name = $request->getAttribute($nameKey);
        $value = $request->getAttribute($valueKey);

        return $this->view->render($response, 'auth/register.tpl', compact('name', 'value', 'nameKey', 'valueKey'));
    }

    public function postRegister($request, $response)
    {
        $user = User::create([
           'first_name' => $request->getParam('first_name'),
           'last_name' => $request-> getParam('last_name'),
           'email' => $request->getParam('email'),
           'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT)
        ]);

        return $response->withRedirect($this->router->pathFor('auth.login'));
    }

    // Login
    public function getSignUp($request, $response)
    {
        return $this->view->render($response, 'auth/login.tpl');
    }

    public function postSignUp()
    {

    }

}