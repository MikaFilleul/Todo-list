<?php

use DI\ContainerBuilder;
use Slim\Views\Twig;

return function (ContainerBuilder $containerBuilder) {
  $containerBuilder->addDefinitions([
    'db' => function () : PDO {
      $host = $_ENV['DB_HOST'];
      $port = $_ENV['DB_PORT'];
      $name = $_ENV['DB_NAME'];
      $user = $_ENV['DB_USER'];
      $pass = $_ENV['DB_PASS'];

      $dsn = "mysql:host=$host;port=$port;dbnqme=$name;charset=utf8;";
      echo $dsn;

      return new PDO($dsn, $user, $pass, [ PDO::ATTR_PERSISTENT => false ]);
    },
    'view' => function () : Twig {
      return Twig::create(__DIR__ . "/../view", [ "cache" => false ]);
    }
  ]);
};
