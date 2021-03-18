<?php declare(strict_types = 1);

require_once __DIR__ . '/../app/Bootstrap.php';

$container = \VerifyApi\Core\Bootstrap::boot();

($container->getByType(\VerifyApi\Api\Application::class))->run();
