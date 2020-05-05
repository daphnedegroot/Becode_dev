<?php

namespace App\Controllers;

use Illuminate\Database\Eloquent\Model;

class UserController extends Model {

    public function create($request, $response)
    {
        return $this->view->render($response, 'users/dashboard.tpl');
    }
}