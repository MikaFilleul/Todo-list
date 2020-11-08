<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class _404Controller extends Controller
{
  public function render(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
    return $this->container->get('view')->render($response, "/page/404.twig");
  }
}
