<?php

require_once(__DIR__ . '/../app/bootstrap.php');

$kernel = new AppKernel('dev', false);
$application = new \Symfony\Bundle\FrameworkBundle\Console\Application($kernel);
$application->run();