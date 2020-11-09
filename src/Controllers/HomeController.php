<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Todo\Models\Model;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends Model
{
  public function render(Request $request, Response $response, array $args): Response {
    if (!$_SESSION['username']) {
      return $response->withHeader('Location', $this->router->urlFor('login'));
    }
    
    return $this->view->render($response, "/page/home.twig", ['username' => $_SESSION['username']]);
  }
}
