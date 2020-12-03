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
		$this->assertEquals(getenv('my_secret'), SecretManager::getSecret());
	}
}
