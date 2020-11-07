<?php

use Todo\Controllers\LoginController;
use Todo\Controllers\SignupController;

$app->get('/[login]', LoginController::class);
$app->get('/signup', SignupController::class);
