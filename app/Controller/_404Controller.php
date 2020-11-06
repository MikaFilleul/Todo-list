<?php
declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class _404Controller extends BaseController
{
  public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
    return $this->container->get('view')->render($response, "/page/404.twig");
  }
}