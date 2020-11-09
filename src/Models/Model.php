<?php
declare(strict_types=1);

namespace Todo\Models;

use DI\Container;
use PDO;
use Slim\Routing\RouteParser;
use Slim\Views\Twig;

class Model {
  protected PDO $db;
  protected Twig $view;
  protected RouteParser $router;

  public function __construct(Container $container) {
    $this->db = $container->get('db');
    $this->view = $container->get('view');
    $this->router = $container->get('router');
  }
}
