<?php

use App\Controllers\HomeController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\Auth\LoginController;
use App\Controllers\Admin\AdminController;

/* Home */
$app->get('/', HomeController::class . ':index')->setName('home');

/* Register */
$app->get('/register', RegisterController::class . ':create')->setName('auth.register');
$app->post('/register', RegisterController::class . ':store');

/* Login */
$app->get('/login', LoginController::class . ':create')->setName('auth.login');
$app->post('/checkLogin', LoginController::class . ':checkLogin')->setName('auth.check');
$app->get('/logout', LoginController::class . ':logout')->setName('logout');

$app->get('/admin', AdminController::class . ':index')->setName('admin');