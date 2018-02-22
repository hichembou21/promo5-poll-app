<?php

use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;

// Routes


$app->get('/', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'index.twig', [
        'persons' => $persons
    ]);
})->setName('index');