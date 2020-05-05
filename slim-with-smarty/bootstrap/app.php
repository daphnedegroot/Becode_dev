<?php
// Start Session
session_start();

// Create Slim app
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'smarty',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]
    ],
]);

// Fetch DI Container
$container = $app->getContainer();

// Configure Eloquent
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};

$container['validator'] = function ($container) {
    return new App\Validation\Validator();
};

// Register Smarty View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Smarty('../resources/views', [
        'cacheDir' => '../resources/cache',
        'compileDir' => '../resources/compile',
        'pluginsDir' => ['../vendor/mathmarques/smarty-view/src']
    ]);

    // Add Slim specific plugins
    $smartyPlugins = new \Slim\Views\SmartyPlugins($c['router'], $c['request']->getUri());
    $view->registerPlugin('function', 'path_for', [$smartyPlugins, 'pathFor']);
    $view->registerPlugin('function', 'base_url', [$smartyPlugins, 'baseUrl']);

    return $view;
};

//$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));

$container['csrf'] = function ($container) {
    return new \Slim\Csrf\Guard;
};

$app->add($container->get('csrf'));

require '../routes/web.php';
