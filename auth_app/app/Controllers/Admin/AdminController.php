<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class AdminController extends Controller {

    public function index($request, $response)
    {
        return $this->view->render($response, 'admin/dashboard.tpl');
    }
}