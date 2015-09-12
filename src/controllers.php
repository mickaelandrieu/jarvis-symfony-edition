<?php

$app['router']->addRoute('get', '/', function () {
	return $this->twig->render('demo/index.twig', ['world' => 'World']);		
});