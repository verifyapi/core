<?php declare(strict_types = 1);

namespace VerifyApi\Core\Controller;

final class DefaultController extends \VerifyApi\Api\Controller
{

	public function process()
	{
		$this->jsonResponse(['apiVersion' => 'v1']);
	}


	public function getRoutes(): \VerifyApi\Api\Route\Collection
	{
		return new \VerifyApi\Api\Route\Collection(
			new \VerifyApi\Api\Route('/')
		);
	}

}
