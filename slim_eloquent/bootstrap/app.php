<?php

session_start();

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'eloquent',
            'username' => 'root',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use($capsule) {

    return $capsule;
};

$container['flash'] = function ($container) {
    return new Slim\Flash\Messages;
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Smarty('../resources/views', [
        'cacheDir' => '../resources/smarty_cache',
        'compileDir' => '../resources/smarty_compile',
        'pluginDir' => ['../vendor/mathmarques/smarty-view/src']
    ]);

    $smartyPlugins = new \Slim\Views\SmartyPlugins($container['router'], $container['request']->getUri());
    $view->registerPlugin('function', 'path_for', [$smartyPlugins, 'pathFor']);
    $view->registerPlugin('function', 'base_url', [$smartyPlugins, 'baseUrl']);


    return $view;
};

require '../routes/web.php';