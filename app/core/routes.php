<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
  // $app->get('/', function (Request $request, Response $response) {
  //   return $this->get('view')->render($response, "/page/login.twig");
  // });
  
  $app->get('/[{page}]', function (Request $request, Response $response, array $args) {
    $page = $args['page'];
    $view = 'login';
    
    if (!$page) {
      return $this->get('view')->render($response, "/page/$view.twig");
    }

    switch($page) {
      case 'login':
        $view = 'login';
        break;
      case 'signup':
        $view = 'signup';
        break;
      case '404':
        $view = 'real404';
        break;
      default:
        $view = '404';
        break;
    }

    return $this->get('view')->render($response, "/page/$view.twig");
  });
};
