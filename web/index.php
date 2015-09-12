<?php

require_once __DIR__.'/../vendor/autoload.php');

$app = new \Jarvis\Jarvis();

require_once __DIR__.'/../app/config.php');

require __DIR__.'/../src/controllers.php';

$response = $framework->analyze();

$response->send();
