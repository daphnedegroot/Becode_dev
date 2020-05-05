<?php

use App\Controllers\HomeController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Auth\LoginController;
use App\Controllers\UserController;


$app->get('/', HomeController::class . ':index')->setName('home');


$app->group('/register', function (){

    $this->get('/', RegisterController::class . ':create')->setName('auth.register');
    $this->post('/', RegisterController::class . ':store');
});


$app->get('/login', LoginController::class . ':create')->setName('auth.login');
$app->post('/check', LoginController::class . ':check')->setName('auth.check');


$app->get('/dashboard', UserController::class . ':create')->setName('user.dashboard');