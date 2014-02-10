<?php

namespace rcrowe\Raven\Tests\Provider\Laravel;

use PHPUnit_Framework_TestCase;

class ConfigTest extends PHPUnit_Framework_TestCase
{
    public function testOptions()
    {
        $config = require __DIR__.'/../../../src/Provider/Laravel/config/config.php';

        $this->assertArrayHasKey('dsn', $config);
        $this->assertArrayHasKey('enabled', $config);
        $this->assertArrayHasKey('level', $config);

        $this->assertTrue(is_string($config['dsn']));
        $this->assertTrue(is_bool($config['enabled']));
        $this->assertTrue(is_string($config['level']));
    }
}