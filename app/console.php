<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

$console = new Application('Jarvis - Symfony Flavored Edition', '0.1');

$console
    ->register('hello:jarvis')
    ->setDescription('The Hello World command from Jarvis')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $output = new SymfonyStyle($input, $output);
        $output->success('Hello World from Jarvis Symfony Flavored Edition !');
    })
;

return $console->run();
