<?php

use Symfony\Component\HttpFoundation\Request;

require_once(__DIR__ . '/../app/bootstrap.php');

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);