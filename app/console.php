<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('Jarvis - Symfony Flavored Edition', '0.1');


return $console->run();
