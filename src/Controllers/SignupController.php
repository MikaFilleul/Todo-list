<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class SignupController extends Controller
{
  public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface {
    return $this->view->render($response, "/page/signup.twig");
  }
}
