<?php
use App\Controllers\HomeController;
use App\Controllers\Auth\AuthController;

// Home
$app->get('/home', HomeController::class . ':index')->setName('home');

// Auth Register
$app->get('/register', AuthController::class . ':getRegister')->setName('auth.register');
$app->post('/register', AuthController::class . ':postRegister');

// Auth Login
$app->get('/login', AuthController::class . ':getSignUp')->setName('auth.login');