<?php

$app['router']->addRoute('get', '/', function() use ($app) {
    return $app->twig->render('demo/index.twig', ['world' => 'World']);
});
