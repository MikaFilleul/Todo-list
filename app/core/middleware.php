<?php
declare(strict_types=1);

use Slim\App;
use Psr\Http\Message\ServerRequestInterface;

return function (App $app) {
  $settings = $app->getContainer()->get('settings');
  
  $errorMiddleware = $app->addErrorMiddleware(
    $settings['displayErrorDetails'],
    $settings['logErrorDetails'],
    $settings['logErrors']
  );

  
  $customErrorHandler = function (
    ServerRequestInterface $request,
    Throwable $exception
  ) use ($app) {
    $response = $app->getResponseFactory()->createResponse();
    $_404Controller = $app->getContainer()->get('_404Controller');
    return $_404Controller($request,$response);
  };
  
  $errorMiddleware->setErrorHandler(Slim\Exception\HttpNotFoundException::class, $customErrorHandler);
};
