<?php
session_start();

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['db'] = function ($container) {
    return new PDO('mysql:host=localhost; dbname=auth', 'root', '');
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