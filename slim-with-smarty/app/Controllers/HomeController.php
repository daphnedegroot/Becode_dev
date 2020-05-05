<?php
/**
 * Created by PhpStorm.
 * User: daphnedegroot
 * Date: 2019-07-01
 * Time: 12:51
 */
namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller {

    public function index($request, $response)
    {
        $name = 'Jean';
        return $this->view->render($response, 'home.tpl', compact('name'));
    }
}