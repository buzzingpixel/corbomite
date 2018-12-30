<?php
declare(strict_types=1);

use Zend\Diactoros\Response;
use src\app\http\controllers\IndexController;

return [
    IndexController::class => function () {
        return new IndexController(new Response());
    },
];
