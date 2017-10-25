<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__ . '/../vendor/autoload.php';
if (PHP_VERSION_ID < 70000) {
    include_once __DIR__ . '/../var/bootstrap.php.cache';
}

(new \Symfony\Component\Dotenv\Dotenv())->load(__DIR__ . '/../.env');

$kernel = new AppKernel('prod', false);
if (PHP_VERSION_ID < 70000) {
    $kernel->loadClassCache();
}

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
