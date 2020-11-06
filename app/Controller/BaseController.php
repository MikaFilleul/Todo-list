<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Container\ContainerInterface;

class BaseController
{
  protected ContainerInterface $container;

  public function __construct(ContainerInterface $container) {
    $this->container = $container;
  }
}
