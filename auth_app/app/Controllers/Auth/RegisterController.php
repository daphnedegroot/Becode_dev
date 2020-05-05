<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;

class RegisterController extends Controller {

    public function create($request, $response)
    {
        return $this->view->render($response, 'auth/register.tpl');
    }

    public function store($request, $response)
    {
        $firstname = $request->getParam('firstname');
        $lastname = $request->getParam('lastname');
        $email = $request->getParam('email');
        $password = password_hash($request->getParam('password'), PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)";
        $result = $this->db->prepare($sql);

        if (!$result) {
            echo "\nPDO::errorInfo():\n";
            print_r($this->db->errorInfo());
        } else {
            $result->bindParam(':firstname', $firstname);
            $result->bindParam(':lastname', $lastname);
            $result->bindParam(':email', $email);
            $result->bindParam(':password', $password);

            $result->execute();

            return $this->view->render($response, 'auth/login.tpl');
        }




    }
}
