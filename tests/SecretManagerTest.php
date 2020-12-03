<?php


namespace SecretManagerTest;


use PHPUnit\Framework\TestCase;
use SecretManager\SecretManager;

class SecretManagerTest extends TestCase
{
	/**
	 * @test
	 *
	 */
	public function getSecret()
	{
		$this->assertEquals('igor1234', SecretManager::getSecret());
	}
}
