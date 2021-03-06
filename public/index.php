<?php
declare(strict_types=1);
session_start();

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/env.php';

$dependencies = require __DIR__ . '/../app/dependencies.php';
$container = $dependencies();

$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

AppFactory::setContainer($container);

$app = AppFactory::create();

$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

require __DIR__ . '/../app/routes.php';

$app->run();
