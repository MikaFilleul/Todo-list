<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;

class Controller
{
  protected ContainerInterface $container;

  public function __construct(ContainerInterface $container) {
    $this->container = $container;
  }
}
