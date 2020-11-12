<?php
declare(strict_types=1);

namespace Todo\Controllers;

use Todo\Models\Tasks;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class TaksController extends Taks
{
    public function getId(Request $request, Response $response): Response {
        return $this->view->render($response, "/page/tache.twig");
    }
}