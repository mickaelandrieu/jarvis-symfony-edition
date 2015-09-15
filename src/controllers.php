<?php

var_dump(get_class($app->twig));
$app['router']->addRoute('get', '/', function ($app) {
    return $app->twig->render('demo/index.twig', ['world' => 'World']);
});
