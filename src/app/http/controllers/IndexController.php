<?php
declare(strict_types=1);

namespace src\app\http\controllers;

use Psr\Http\Message\ResponseInterface;

class IndexController
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function __invoke(): ResponseInterface
    {
        $response = $this->response->withHeader('Content-Type', 'text/html');

        $response->getBody()->write('TODO: Build out index page');

        return $response;
    }
}
