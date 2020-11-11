<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Todo\Models\Task;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class TaskController extends Task
{
  # CREATE
  public function getCreate(Request $request, Response $response, array $args): Response {
    if (!$_SESSION['username']) {
      return $response->withHeader('Location', $this->router->urlFor('login'));
    }

    $users = $this->getAllUsers();
    
    return $this->view->render($response, "/page/create.twig", ['username' => $_SESSION['username'], 'users' => $users]);
  }

  public function postCreate(Request $request, Response $response): Response {
    $data = $request->getParsedBody();

    return $response->withHeader('Location', $this->router->urlFor('home'));
  }
  # CREATE
}
