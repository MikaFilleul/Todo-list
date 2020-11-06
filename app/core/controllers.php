<?php

use App\Controller\_404Controller;
use DI\ContainerBuilder;
use App\Controller\LoginController;
use App\Controller\SignupController;

return function (ContainerBuilder $containerBuilder) {
  $containerBuilder->addDefinitions([
    'LoginController' => function ($containerBuilder) {
      return new LoginController($containerBuilder);
    },
    'SignupController' => function ($containerBuilder) {
      return new SignupController($containerBuilder);
    },
    '_404Controller' => function ($containerBuilder) {
      return new _404Controller($containerBuilder);
    },
  ]);
};
