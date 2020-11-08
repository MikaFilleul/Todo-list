<?php
declare(strict_types=1);

use Todo\Models\User;

$container->set('userModel', \DI\value(function($container){
  return new User($container);
}));
