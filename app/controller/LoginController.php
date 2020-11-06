<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class LoginController
{
  private $view;

  public function __construct(Twig $view)
  {
    $this->view = $view;
  }
  
  public function login(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
  {
    // your code here
    // use $this->view to render the HTML
    // ...
    
    return $response;
  }
}
