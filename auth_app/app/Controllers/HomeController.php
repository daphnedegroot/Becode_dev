<?php

namespace App\Controllers;

use App\Controllers\Controller;
use PDO;

class HomeController extends Controller {

    public function index($request, $response)
    {

        /*$users = $this->db->query("SELECT * FROM users")->fetchAll(\PDO::FETCH_OBJ);
        if (!empty($users)){
            return $this->view->render($response, 'home.tpl', compact('users'));

        }
        return 'no user found';*/

        return $this->view->render($response, 'home.tpl', compact('users'));

    }
}