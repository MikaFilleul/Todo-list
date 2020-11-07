<?php
declare(strict_types=1);

namespace Todo\Controllers;

use DI\Container;
use PDO;
use Slim\Views\Twig;

class Controller
{
  protected PDO $db;
  protected Twig $view;

  public function __construct(Container $container) {
    $this->db = $container->get('db');
    $this->view = $container->get('view');
  }
}
