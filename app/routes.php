<?php
declare(strict_types=1);

use Todo\Controllers\AuthController;
use Todo\Controllers\HomeController;

$container->set('router', \DI\value($app->getRouteCollector()->getRouteParser()));

$app->get('/login', AuthController::class.':getLogin')->setName('login');
$app->post('/login', AuthController::class.':postLogin');

$app->get('/logout', AuthController::class.':logout');

$app->get('/signup', AuthController::class.':getSignup')->setName('signup');
$app->post('/signup', AuthController::class.':postSignup');

$app->get('/', HomeController::class.':render')->setName('home');
