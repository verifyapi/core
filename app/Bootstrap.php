<?php declare(strict_types = 1);

namespace VerifyApi\Core;

require_once __DIR__ . '/../vendor/autoload.php';

class Bootstrap
{

	public static function boot(): \Nette\DI\Container
	{
		$configurator = new \VerifyApi\Api\Configurator();

		$configurator->setTempDir(__DIR__ . '/../temp');

		$configurator->addConfig(__DIR__ . '/../config/common.neon');

		$configurator->setDebugMode(TRUE);

		return $configurator->createContainer();
	}

}
