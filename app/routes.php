<?php

use Todo\Controllers\LoginController;
use Todo\Controllers\SignupController;

$app->get('/[login]', LoginController::class . ':render');
$app->get('/signup', SignupController::class . ':render');
