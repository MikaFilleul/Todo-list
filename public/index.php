<?php
declare(strict_types=1);

use Dotenv\Dotenv;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = DotEnv::createImmutable(__DIR__, "/../.env");
$dotenv->load();

$containerBuilder = new ContainerBuilder();

$settings = require __DIR__ . '/../app/core/settings.php';
$settings($containerBuilder);

$dependencies = require __DIR__ . '/../app/core/dependencies.php';
$dependencies($containerBuilder);

$controllers = require __DIR__ . '/../app/core/controllers.php';
$controllers($containerBuilder);

$container = $containerBuilder->build();

AppFactory::setContainer($container);

$app = AppFactory::create();

$middleware = require __DIR__ . '/../app/core/middleware.php';
$middleware($app);

$routes = require __DIR__ . '/../app/core/routes.php';
$routes($app);

$app->run();
