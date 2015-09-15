<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../app/config.php';

$app = new \Jarvis\Jarvis([
    'container_provider' => [
        'Jarvis\Skill\DoctrineORM\ContainerProvider',
        'Jarvis\Skill\Twig\ContainerProvider'
    ],
]);

require __DIR__.'/../src/controllers.php';

$response = $app->analyze();

$response->send();
