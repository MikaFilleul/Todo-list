<?php

use Slim\App;

return function (App $app) {
  $app->get('/[login]', 'LoginController')->setName('Login');
  $app->get('/signup', 'SignupController')->setName('Signup');
  
  // $app->get('/[{page}]', function (Request $request, Response $response, array $args) {
  //   $page = $args['page'];
  //   $view = 'login';
    
  //   if (!$page) {
  //     return $this->get('view')->render($response, "/page/$view.twig");
  //   }

  //   switch($page) {
  //     case 'login':
  //       $view = 'login';
  //       break;
  //     case 'signup':
  //       $view = 'signup';
  //       break;
  //     case '404':
  //       $view = 'real404';
  //       break;
  //     default:
  //       $view = '404';
  //       break;
  //   }

  //   return $this->get('view')->render($response, "/page/$view.twig");
  // });
};
